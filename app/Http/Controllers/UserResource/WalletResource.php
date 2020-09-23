<?php

namespace App\Http\Controllers\UserResource;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Auth;
use Exception;

use App\Zone;
use App\Promocode;
use App\UserAddress;
use App\PromocodeUsage;
use App\WalletPassbook;
use Carbon\Carbon;
class WalletResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $request->user()->wallet;
    }

    public function promocode(Request $request)
    {
        /*$promo = PromocodeUsage::where('user_id', $request->user()->id)->pluck('promocode_id');
        return Promocode::whereNotIn('id', $promo)->where('status', 'ADDED')->where('expiration','>=', Carbon::today())->get();*/
        $Promocode = Promocode::with('pusage');
        $Promocodes = $Promocode->where('status','ADDED')->where('expiration','>',date("Y-m-d"))->get();
        $Promocodes->map(function ($Promo,$key) use ($Promocodes) {
            $promostatus = $this->promoavailable($Promo);;
            if($promostatus=='1'){
                $Promo['promostatus'] = $promostatus;
                return $Promo;
            }else{
                $Promocodes->forget($key);
            }
        });
        if(count($Promocodes)>0){
                $Promocodes = array_values($Promocodes->toArray());
        }
        return $Promocodes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'promocode_id' => 'exists:promocodes,id',
            'couponcode' => 'exists:promocodes,promo_code',
        ]);

        try{

            if($request->promocode_id==''){
                $find_promo = Promocode::where('promo_code',$request->couponcode)->first();
            }else{
                $find_promo = Promocode::find($request->promocode_id);
            }
//return PromocodeUsage::select('user_id')->where('promocode_id', $find_promo->id)->whereIN('status',['ADDED','USED'])->distinct()->count();
            if($find_promo->status == 'EXPIRED' || (date("Y-m-d") > $find_promo->expiration)){

                if($request->ajax()){

                    return response()->json(['error' => trans('form.promocode.expired')], 422);
                } else {
                    return back()->with('flash_error', trans('form.promocode.expired'));
                }

            } elseif(PromocodeUsage::select('user_id')->where('promocode_id', $find_promo->id)->whereIN('status',['ADDED','USED'])->distinct()->count() >= $find_promo->coupon_limit){

                if($request->ajax()){

                    return response()->json(['error' => trans('coupon_limit_excced')], 422);

                }else{
                    return back()->with('flash_error', trans('form.promocode.already_in_use'));
                }
            } elseif(PromocodeUsage::where('promocode_id', $find_promo->id)->where('user_id', $request->user()->id)->whereIN('status',['ADDED','USED'])->count() > $find_promo->coupon_user_limit){

                if($request->ajax()){

                    return response()->json(['error' => trans('form.promocode.already_in_use')], 422);

                }else{
                    return back()->with('flash_error', trans('form.promocode.already_in_use'));
                }

            } else {

                if($request->has('check')){
                    if($request->has('remove')){
                        $request->session()->forget('promocode_id');
                        $request->session()->forget('promocode_price');
                        $request->session()->forget('promocode_name');
                         return $find_promo;
                    }else{
                        //if($request->has('add')){
                            $request->session()->put('promocode_id',$find_promo->id);
                            $request->session()->put('promocode_price',$find_promo->discount);
                            $request->session()->put('promocode_name',$find_promo->promo_code);
                            return $find_promo;
                        /*}else{

                        }*/
                    }
                }else{
                    $request->user()->wallet_balance += Promocode::find($find_promo->id)->discount;
                    $request->user()->save();

                    WalletPassbook::create([
                        'user_id' => $request->user()->id,
                        'amount'  => Promocode::find($find_promo->id)->discount,
                        'status' => 'CREDITED',
                        'message' => trans('form.promocode.message',['promocode' => $find_promo->promo_code])
                    ]);

                    PromocodeUsage::create([
                        'user_id' => $request->user()->id,
                        'promocode_id' => $find_promo->id,
                        'status' => 'USED',
                    ]);

                    return ['wallet_balance' => $request->user()->wallet_balance];

                    if($request->ajax()){

                        return response()->json([
                            'message' => trans('form.promocode.applied')
                        ]); 

                    } else {
                        return back()->with('flash_success', trans('form.promocode.applied'));
                    }
                }
            }

        } catch (Exception $e) {
            if($request->ajax()){
                return response()->json(['error' => trans('form.whoops')], 500);
            }else{
                return back()->with('flash_error', trans('form.whoops'));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function promoavailable($promo){
        $promo_count = PromocodeUsage::where('promocode_id',$promo->id)->count();
        $promo_user = PromocodeUsage::where('promocode_id',$promo->id)->where('user_id',Auth::user()->id)->count();
        if($promo_user >=$promo->coupon_user_limit){
            return 0;
        }else if($promo_count >=$promo->coupon_limit){
            return 0;
         
        }else{
            return 1;
        }
    }
}

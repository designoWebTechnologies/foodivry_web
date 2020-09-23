<?php

namespace App\Http\Controllers\UserResource;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Auth;
use Exception;
use App\Zone;
use App\UserAddress;

class AddressResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $user_address = $request->user()->addresses;
        if($request->ajax()){
            return $user_address;
        }
        return view('user.user_address',compact('user_address'));
        
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
        if(@$request->update=='YES'){
            $this->validate($request, [
                'map_address' => 'required|string|max:255',
                'latitude' => 'required|numeric',
                'longitude' => 'required|numeric',
                'type' => 'required',
            ]);
            $Address = UserAddress::where('type',$request->type)->where('user_id',$request->user()->id)->first();
            $Address->update($request->all());
            if($request->ajax()){
                return $Address;
            }

        }else{
            if($request->ajax()){
                $messages = [
                    //'unique' => 'The Address :attribute "'.$request->type.'" is already added please choose others',
                    'unique' => 'REPLACE',
                ];
                $this->validate($request, [
                        'map_address' => 'required|string|max:255',
                        'latitude' => 'required|numeric',
                        'longitude' => 'required|numeric',
                        'type' => 'required|unique:user_addresses,type,NULL,id,deleted_at,NULL,user_id,'.$request->user()->id,
                    ],$messages);
            }else{

                $this->validate($request, [
                        //'building' => 'required|string|max:255',
                        //'city' => 'required|string|max:255',
                        //'state' => 'required|string|max:255',
                        //'country' => 'required|string|max:255',
                        //'pincode' => 'required|string|max:255',
                        'map_address' => 'required|string|max:255',
                        'latitude' => 'required|numeric',
                        'longitude' => 'required|numeric',
                        'type' => 'required'
                    ]);

            }
        }

        //\Log::info('New user address:'.$request->user()->id, $request->all());

        $Zone = Zone::validateLocation($request->latitude, $request->longitude)->get();
         \Log::info($Zone);
       /* if(!sizeof($Zone)) {
            return response()->json(['message' => 'We don\'t serve this location yet.'], 422);
        }*/

        $Address = $request->all();
        $Address['user_id'] = $request->user()->id;

        try {
           
            $UserAddress=array();

            if($Address['type']!='other'){
                $UserAddress = UserAddress::where('user_id',$Address['user_id'])->where('type',$Address['type'])->first();
            }
            if(!empty($UserAddress)){
                $UserAddress->map_address=$Address['map_address'];
                $UserAddress->latitude=$Address['latitude'];
                $UserAddress->longitude=$Address['longitude'];
                $UserAddress->building=$Address['building'];
                $UserAddress->landmark=$Address['landmark'];
                $UserAddress->save();
            }
            else{
                $UserAddress = UserAddress::create($Address);
            }
            
            if($request->ajax()){
                return $UserAddress;
            }
            return back()->with('flash_success',trans('form.resource.created'));
        } catch (Exception $e) {
            if($request->ajax()){
               return response()->json(['error' => trans('form.whoops')], 500); 
            }
            return back()->with('flash_failure',trans('form.whoops'));
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
        try {
            $Address = UserAddress::findOrFail($id);
            return $Address;
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => trans('form.no_data_found')], 500);
        } catch (Exception $e) {
            return response()->json(['error' => trans('form.whoops')], 500);
        }
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
        $this->validate($request, [
                // 'building' => 'required|string|max:255',
                // 'street' => 'required|string|max:255',
                // 'city' => 'required|string|max:255',
                // 'state' => 'required|string|max:255',
                // 'country' => 'required|string|max:255',
                // 'pincode' => 'required|string|max:255',
                // 'landmark' => 'required|string|max:255',
                'map_address' => 'required|string|max:255',
                'latitude' => 'required|numeric',
                'longitude' => 'required|numeric',
                'type' => 'required|unique:user_addresses,type,'.$id.',id,deleted_at,NULL,user_id,'.$request->user()->id,
            ]);

        try {
            $Address = UserAddress::findOrFail($id);
            $Address->update($request->all());
            if($request->ajax()){
                return $Address;
            }
            return back()->with('flash_success',trans('form.resource.created'));
        } catch (ModelNotFoundException $e) {
            if($request->ajax()){
                return response()->json(['error' => trans('form.whoops')], 500);
            }
            return back()->with('flash_failure',trans('form.whoops'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        try {
            $Address = UserAddress::findOrFail($id);
            $Address->delete();
            if($request->ajax()){
                return response()->json(['message' => trans('form.resource.deleted')]);
            }
            return back()->with('flash_success',trans('form.resource.deleted'));
        } catch (ModelNotFoundException $e) {
            if($request->ajax()){
                return response()->json(['error' => trans('form.whoops')], 500);
            }
             return back()->with('flash_error',trans('form.form.whoops'));
        }
    }
}

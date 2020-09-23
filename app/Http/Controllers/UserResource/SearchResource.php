<?php

namespace App\Http\Controllers\UserResource;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Auth;
use Setting;
use Exception;
use App\Http\Controllers\Resource\ShopResource;
use App\Http\Controllers\UserResource\CartResource;
use App\Http\Controllers\Resource\CardResource;
use App\Http\Controllers\UserResource\WalletResource;
use App\Shop;
use App\Product;
use Session;
use App\UserCart;
use App\Cuisine;
use App\Order;
use App\CartAddon;
use App\Category;
use App\Promocode;
use App\ShopBanner;
use Carbon\Carbon;


class SearchResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        try{
            $user_id = NULL;
            if($request->has('user_id')){
                $user_id = $request->user_id?:NULL;  
            }
            if($request->has('search_loc')){
              Session::put('search_loc',$request->search_loc);
            }
            if($request->has('latitude')){
              Session::put('latitude',$request->latitude);
            }
            if($request->has('longitude')){
              Session::put('longitude',$request->longitude);
            }
            $Products = Product::listsearch($user_id,$request->name);
            if($request->ajax()){
                if(count($Products)>0){
                    $Products->filter(function ($Product,$key) use ($Products){
                        if(@count($Product->shop)>0){
                            $shopstatus = (new ShopResource)->shoptime($Product->shop);;
                            if($shopstatus=='OPEN'){
                                $Product['shopstatus'] = $shopstatus;
                                return $Product;
                            }else{
                                $Products->forget($key);
                            }
                        }
                        
                    });
                }
                if(count($Products)>0){
                    $Products = array_values($Products->toArray());
                }
            }
            $Shops = (new ShopResource)->filter($request);
            if($request->ajax()){
                $Shops->map(function ($Shop) {
                    $Shop['shopstatus'] = (new ShopResource)->shoptime($Shop);;
                    if($Shop->rating_status==0){
                        $Shop['rating'] = (int)(new ShopResource)->ovalallrating($Shop);;
                    }
                    return $Shop;
                });
            }
            if($request->has('latitude') && $request->has('longitude'))
            {
                $longitude = $request->longitude; 
                $latitude = $request->latitude;
                if(Setting::get('search_distance')>0){
                    $distance = Setting::get('search_distance');
                    $BannerImage = ShopBanner::with('shop','product')
                        ->whereHas('shop', function ($query) use ($latitude,$longitude,$distance){
                        //$query->where('content', 'like', 'foo%');
                        $query->select('shops.*')
                        ->selectRaw("(6371 * acos( cos( radians('$latitude') ) * cos( radians(shops.latitude) ) * cos( radians(shops.longitude) - radians('$longitude') ) + sin( radians('$latitude') ) * sin( radians(shops.latitude) ) ) ) AS distance")

                        ->whereRaw("(6371 * acos( cos( radians('$latitude') ) * cos( radians(shops.latitude) ) * cos( radians(shops.longitude) - radians('$longitude') ) + sin( radians('$latitude') ) * sin( radians(shops.latitude) ) ) ) <= $distance");
                        })->get(); 
                        $BannerImage->map(function ($BannerImagee) {
                        $BannerImagee['shopstatus'] = (new ShopResource)->shoptime($BannerImagee->shop);;
                        $BannerImagee['shopopenstatus'] = (new ShopResource)->shoptiming($BannerImagee->shop);;
                        return $BannerImagee;
                         });
                }else{
                    $BannerImage = ShopBanner::with('shop','product')->get();
                    $BannerImage->map(function ($BannerImagee) {
                        $BannerImagee['shopstatus'] = (new ShopResource)->shoptime($BannerImagee->shop);;
                        $BannerImagee['shopopenstatus'] = (new ShopResource)->shoptiming($BannerImagee->shop);;
                        return $BannerImagee;
                    });
                }
            }else{    
                $BannerImage = ShopBanner::with('shop','product')->get();
                $BannerImage->map(function ($BannerImagee) {
                    $BannerImagee['shopstatus'] = (new ShopResource)->shoptime($BannerImagee->shop);;
                    $BannerImagee['shopopenstatus'] = (new ShopResource)->shoptiming($BannerImagee->shop);;
                    return $BannerImagee;
                });
            }
            $Cuisines = Cuisine::all();
            //$shop = $Shops;
            $Shops_new = clone $Shops;
            $Shops_popular = clone $Shops;
            $Shops_superfast = clone $Shops;
            $Shops_offers = clone $Shops;
            $Shops_vegiterian =  clone $Shops;
            $filter_shop = clone $Shops;
            $rating_shop = clone $Shops;
            //print_r(DB::getQueryLog()); exit;
            
            if($request->ajax()){
                $data = [
                    'products' => $Products,
                    'shops' => $Shops
                ];
                return $data;
            }
             $Shops = $Shops->get();
             $Shops->map(function ($Shop) {
                    $Shop['shopstatus'] = (new ShopResource)->shoptime($Shop);
                    $Shop['shopopenstatus'] = (new ShopResource)->shoptiming($Shop);
                    return $Shop;
                });

             if($request->get('v')=='grid'){
                return view('user.shop.index-grid',compact('Shops','Cuisines'));
            }else
            if($request->get('v')=='map'){
                return view('user.shop.index-map',compact('Shops','Cuisines'));
            }else{
                return view('user.shop.index',compact('Shops','Cuisines','BannerImage','Shops_popular','Shops_superfast','Shops_offers','Shops_vegiterian','Shops_new','filter_shop','rating_shop'));
            }
         }catch(Exception $e){
            if($request->ajax()){
                return response()->json(['error' => trans('form.whoops')], 500);
            }
            return back()->with('flash_error', trans('form.whoops'));
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id = NULL){   
        $request->session()->forget('promocode_id');
        try{
            if($request->has('veg')){
                $request->request->add(['food_type'=>'veg']);
            }
            if($request->has('name')){
                $request->request->add(['name'=>$request->name]);
            }
            $Shop_details = (new ShopResource)->filter($request);
            // dd($Shop_details);
            $Shop = $Shop_details[0];
            if($Shop->rating_status==0){
                $Shop['rating'] = (int)(new ShopResource)->ovalallrating($Shop);;
            }
            $FeaturedProduct1 = Product::with('featured_images','categories')->where('shop_id',$Shop->id)->where('featured','!=','0');
            if($request->has('prodname')){
                $FeaturedProduct1->where('products.name', 'LIKE', '%' . $request->prodname . '%');
            } 

            $FeaturedProduct = $FeaturedProduct1->orderBy('featured','ASC')->get();
            // dd($FeaturedProduct);
            //print_r(\DB::getQueryLog());
            if(Setting::get('SUB_CATEGORY')==1){
                $Categories = Category::with('subcategories')->where('parent_id',0)->where('shop_id',$Shop->id)->orderBy(\DB::raw('ISNULL(position), position'),'ASC')->get();
            }else{
                \DB::enableQueryLog();
                $Categories = Category::where('shop_id',$Shop->id);
                $Categories->orderBy(\DB::raw('ISNULL(position), position'),'ASC')->get();
                $Categories_product = Category::select('categories.*')->where('shop_id',$Shop->id)
                    ->join('category_product','category_product.category_id','=','categories.id')
                    ->distinct('categories.id')->get();
            }
            //print_r(\DB::getQueryLog());
             // echo 44444;exit; 
            $Cart = Session::get('shop')?:[];
            if(Auth::user()){
                $shop_id = @key($Cart);
                if(isset($Cart[$shop_id])){ 
                    foreach($Cart[$shop_id] as $item){
                        $CartProduct = UserCart::create([
                            'user_id' => $request->user()->id,
                            'product_id' => $item['product_id'],
                            'quantity' => $item['quantity'],
                            'note' => $item['note']
                        ]);
                        if(count($item['addons'])>0){
                            foreach($item['addons'] as $key => $val){
                                CartAddon::create([
                                    'addon_product_id' => $val['addon_product_id'],
                                    'user_cart_id' => $CartProduct->id,
                                    'quantity' => $val['quantity'],
                                ]); 
                            }

                        }
                    }
                    Session::pull('shop');
                }
            
                $Cart = (new CartResource)->index($request);
                
                if(isset($request->myaddress)){
                    if(Setting::get('payment_mode')=='braintree'){
                        $request->merge([
                            'type' => "braintree"
                        ]);
                        
                    }else{ 
                        $request->merge([
                            'type' => "stripe"
                        ]);
                    }

                    $ether_response ='';$ripple_response='';
                    $transaction_id = rand(100000000,999999999);
                   if(Setting::get('ETHER_KEY')!=''){
                        $client = new \GuzzleHttp\Client();
                        $request_ripple = $client->get('https://www.bitstamp.net/api/v2/ticker/xrpusd');
                        $ripple_response = json_decode($request_ripple->getBody());
                        
                    }
                    if(Setting::get('ETHER_KEY')!=''){
                        $client = new \GuzzleHttp\Client();
                        $request_ether = $client->get('https://api.etherscan.io/api?module=stats&action=ethprice&apikey='.Setting::get('ETHER_KEY'));
                        $ether_response = json_decode($request_ether->getBody());
                    }


                    $cards = (new CardResource)->index($request);
                    $Promocode = Promocode::with('pusage');
                    $Promocodes = $Promocode->where('status','ADDED')->where('expiration','>',date("Y-m-d"))->get();
                    // dd($Promocodes);
                    $Promocodes->map(function ($Promo) {
                        $Promo['promostatus'] = (new WalletResource)->promoavailable($Promo);;
                        return $Promo;
                    });
                    
                    return view('user.shop.delivery_address',compact('Shop','Cart','cards','Promocodes','ripple_response','ether_response','transaction_id'));
                }
            }
            return view('user.shop.show',compact('Shop','Cart','FeaturedProduct','Categories', 'Categories_product'));
         }catch(Exception $e){
            if($request->ajax()){
                return response()->json(['error' => trans('form.whoops')], 500);
            }
            return back()->with('flash_error', $e->getMessage());
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ordertrack(Request $request,$id){
        try{
            $Order = Order::findOrFail($id);;
            $map = '1';
            if($request->ajax()){
                return $Order;
            }
            return view('user.orders.track_order',compact('Order','map'));
        }catch(Exception $e){
            if($request->ajax()){
                return response()->json(['error' => trans('form.whoops')], 500);
            }
            return back()->with('flash_error', trans('form.whoops'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function productDetails(Request $request,$id,$cartid,$shopname,$productname)
    {   
        try{
            $ids = explode('-',base64_decode($id));
            $shop_id=$ids[1];
            $product_id = $ids[0];
            $Shop = Shop::findOrFail($shop_id);
            $Product = Product::with('images','addons','cart')->where('id',$product_id)->firstOrFail();

            $Cart = Session::get('shop')?:[];
            if(Auth::user()){
                $shop_id = @key($Cart);
                if(isset($Cart[$shop_id])){ 
                    foreach($Cart[$shop_id] as $item){
                        $CartProduct = UserCart::create([
                            'user_id' => $request->user()->id,
                            'product_id' => $item['product_id'],
                            'quantity' => $item['quantity'],
                            'note' => $item['note']
                        ]);
                        if(count($item['addons'])>0){
                            foreach($item['addons'] as $key => $val){
                                CartAddon::create([
                                    'addon_product_id' => $val['addon_product_id'],
                                    'user_cart_id' => $CartProduct->id,
                                    'quantity' => $val['quantity'],
                                ]); 
                            }
                        }
                    }
                    Session::pull('shop');
                }  
            }

            $CartShop= Session::get('shop')?:[];

            if(Auth::user()){
                $Cart = UserCart::with('cart_addons')->where('id' , $cartid)->first();
            }else{
               $Cart =[]; 
            }
              
            return view('user.shop.product_details',compact('Product','Shop','Cart','CartShop'));
        }catch(Exception $e){
             if($request->ajax()){
                return response()->json(['error' => trans('form.whoops')], 500);
            }
            return back()->with('flash_error', trans('form.whoops'));
        }
    }

    public function favourites(){
        $Shops = Shop::all();
         return view('user.shop.favourites',compact('Shops'));
    }
    public function offers(Request $request){
        try {
            //$Promocodes = Promocode::all();
            $user_id = $request->user()->id;
            $Promocode = Promocode::with(['pusage' => function($q) use ($user_id){
                if($user_id != NULL){
                    $q->where('promocode_usages.user_id',$user_id);
                }
            }]);
                    
            $Promocodes = $Promocode->where('promocodes.status','ADDED')->where('expiration','>',Carbon::today())->orderBy('id','DESC')->get();
            
            return view('user.orders.offers', compact('Promocodes'));
        } catch (ModelNotFoundException $e) {
            return back()->with('flash_error', trans('form.whoops'));
        }
         
    }

    public function legal(){
        try {
            return view('user.legal');
        } catch (ModelNotFoundException $e) {
            return back()->with('flash_error', trans('form.whoops'));
        }
         
    }

    public function faq(){
        try {
            return view('user.faq');
        } catch (ModelNotFoundException $e) {
            return back()->with('flash_error', trans('form.whoops'));
        }
         
    }

    public function queries(){
        try {
            return view('user.queries');
        } catch (ModelNotFoundException $e) {
            return back()->with('flash_error', trans('form.whoops'));
        }
         
    }


}

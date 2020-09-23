@extends('user.layouts.app')
@section('content')
 <!-- Content Wrapper Starts -->
        <div class="content-wrapper">
            <div class="intro-banner-outer section">
                <div class="container">
                    <div class="intro-slide">
                        @forelse($BannerImage as $Shop)
                            @if($Shop->status == 'active')
                                @if($Shop->shopstatus=='OPEN')
                                    <a href="{{url('/restaurant/details')}}?name={{$Shop->shop->name}}" class="intro-box">
                                        <div class="intro-banner-img bg-img" style="background-image: url({{$Shop->url}});"></div>
                                    </a>
                                @else
                                    <div class="slick-list">
                                        <a href="#" class="">
                                            <div class="intro-banner-img bg-img" style="background-image: url({{$Shop->url}});"></div>
                                            @if($Shop->shopstatus=='CLOSED')
                                                <div class="red centered"><div class="text">  Closed</div><div class="opentext">({{$Shop->shopopenstatus}})</div></div>
                                            @endif
                                        </a>
                                    </div>
                                @endif  
                            @endif
                        @empty
                            <a href="" class="intro-box">
                                <div class="intro-banner-img bg-img" style="background-image: url({{ asset('public/assets/user/img/banner-2.jpg')}});"></div>
                            </a>
                        @endforelse
                    </div>
                </div>
            </div>
            <!-- Intro Banner Ends -->
            <div style="display:none">
                <input type="radio" name="delivery_time" value="anytime"  />@lang('user.any_time')
                <input type="radio" name="delivery_time" value="anytime"  />@lang('user.fixed_time')
            </div>
             <!-- Food Section Starts -->
            <div class="food-section-outer">
                <div class="container">
                    <div class="food-section row" id="filter-menu">
                        <!-- Food Section Left Starts -->
                        <div class="food-sec-left col-md-3 col-sm-4 col-xs-12">
                            <!-- Restaurant Filters Starts -->
                            <div class="restaurant-filters">
                                <!-- Restaurant Filter Box Starts -->
                                <a href="#popular" class="res-filter-box filter-scroll-menu active">
                                    <span class="res-filter-icon"><i class="ion-fireball"></i></span>
                                    <span class="res-filter-txt">
                                        <h6 class="res-filter-name">@lang('user.popular')</h6>
                                        <p class="res-filter-option">

                                        <?php @$Popularity = @$Shops_popular->Popularity(); 
                                            $Popularity->map(function ($Shop) {
                                                $Shop['shopstatus'] = (new \App\Http\Controllers\Resource\ShopResource)->shoptime($Shop);;
                                                $Shop['shopopenstatus'] = (new \App\Http\Controllers\Resource\ShopResource)->shoptiming($Shop);;
                                                if($Shop->rating_status==0){
                                                    $Shop['rating'] = (int)(new \App\Http\Controllers\Resource\ShopResource)->ovalallrating($Shop);;
                                                }
                                                return $Shop;
                                            });
                                            ?>
                                        {{count($Popularity)}} @lang('user.options')</p>
                                    </span>
                                </a>
                                <!-- Restaurant Filter Box Ends -->
                                <!-- Restaurant Filter Box Starts -->
                                <a href="#fast" class="res-filter-box filter-scroll-menu">
                                    <span class="res-filter-icon"><i class="ion-ios-timer-outline"></i></span>
                                    <span class="res-filter-txt">
                                        <h6 class="res-filter-name">@lang('user.super_fast_delivery')</h6>
                                        <p class="res-filter-option">
                                         <?php @$Fastdelivery = @$Shops_superfast->Fastdelivery(); 
                                            $Fastdelivery->map(function ($Shop) {
                                                $Shop['shopstatus'] = (new \App\Http\Controllers\Resource\ShopResource)->shoptime($Shop);;
                                                $Shop['shopopenstatus'] = (new \App\Http\Controllers\Resource\ShopResource)->shoptiming($Shop);;
                                                if($Shop->rating_status==0){
                                                    $Shop['rating'] = (int)(new \App\Http\Controllers\Resource\ShopResource)->ovalallrating($Shop);;
                                                }
                                                return $Shop;
                                            });
                                            ?>
                                        {{count(@$Fastdelivery)}} @lang('user.options')</p>
                                    </span>
                                </a>
                                <!-- Restaurant Filter Box Ends -->
                                <!-- Restaurant Filter Box Starts -->
                                <a href="#offers" class="res-filter-box filter-scroll-menu">
                                    <span class="res-filter-icon"><i class="fa fa-gift"></i></span>
                                    <span class="res-filter-txt">
                                        <h6 class="res-filter-name">@lang('user.offers_around')</h6>
                                        <p class="res-filter-option">
                                        <?php @$Offers = @$Shops_offers->Offers(); 
                                            $Offers->map(function ($Shop) {
                                                $Shop['shopstatus'] = (new \App\Http\Controllers\Resource\ShopResource)->shoptime($Shop);;
                                                $Shop['shopopenstatus'] = (new \App\Http\Controllers\Resource\ShopResource)->shoptiming($Shop);;
                                                if($Shop->rating_status==0){
                                                    $Shop['rating'] = (int)(new \App\Http\Controllers\Resource\ShopResource)->ovalallrating($Shop);;
                                                }
                                                return $Shop;
                                            });
                                        ?>
                                        {{count(@$Offers)}} @lang('user.options')</p>
                                    </span>
                                </a>
                                <!-- Restaurant Filter Box Ends -->
                                <!-- Restaurant Filter Box Starts -->
                                <a href="#vegetarian" class="res-filter-box filter-scroll-menu">
                                    <span class="res-filter-icon"><i class="fa fa-envira"></i></span>
                                    <span class="res-filter-txt">
                                        <h6 class="res-filter-name">@lang('user.veg_options')</h6>
                                        <p class="res-filter-option">
                                        <?php @$vegiterian = @$Shops_vegiterian->Veg(); 
                                            $vegiterian->map(function ($Shop) {
                                                $Shop['shopstatus'] = (new \App\Http\Controllers\Resource\ShopResource)->shoptime($Shop);;
                                                $Shop['shopopenstatus'] = (new \App\Http\Controllers\Resource\ShopResource)->shoptiming($Shop);;
                                                if($Shop->rating_status==0){
                                                    $Shop['rating'] = (int)(new \App\Http\Controllers\Resource\ShopResource)->ovalallrating($Shop);;
                                                }
                                                return $Shop;
                                            });
                                        ?>
                                        {{count(@$vegiterian)}} @lang('user.options')</p>
                                    </span>
                                </a>
                                <!-- Restaurant Filter Box Ends -->
                                <!-- Restaurant Filter Box Starts -->
                                <a href="#whats-new" class="res-filter-box filter-scroll-menu">
                                    <span class="res-filter-icon"><i class="ion-android-restaurant"></i></span>
                                    <span class="res-filter-txt">
                                        <h6 class="res-filter-name">@lang('user.whats_new')</h6>
                                        <p class="res-filter-option">
                                        <?php @$whats_new = @$Shops_new->Newshop(); 
                                            $whats_new->map(function ($Shop) {
                                                $Shop['shopstatus'] = (new \App\Http\Controllers\Resource\ShopResource)->shoptime($Shop);;
                                                $Shop['shopopenstatus'] = (new \App\Http\Controllers\Resource\ShopResource)->shoptiming($Shop);;
                                                if($Shop->rating_status==0){
                                                    $Shop['rating'] = (int)(new \App\Http\Controllers\Resource\ShopResource)->ovalallrating($Shop);;
                                                }
                                                return $Shop;
                                            });
                                        ?>
                                         {{count($whats_new)}} @lang('user.options')</p>
                                    </span>
                                </a>
                                <!-- Restaurant Filter Box Ends -->
                                <!-- Restaurant Filter Box Starts -->
                                <a href="#see-all" class="res-filter-box filter-scroll-menu">
                                    <span class="res-filter-icon"><i class="ion-arrow-down-c"></i></span>
                                    <span class="res-filter-txt">
                                        <h6 class="res-filter-name">@lang('user.see_all')</h6>
                                        <p class="res-filter-option">{{count($Shops)}} @lang('user.restaurants')</p>
                                    </span>
                                </a>
                                <!-- Restaurant Filter Box Ends -->
                            </div>
                            <!-- Restaurant Filters Ends -->
                        </div>
                        <!-- Food Section Left Ends -->
                        <!-- Food Section Right Starts -->
                        <div class="food-sec-right col-md-9 col-sm-8 col-xs-12">
                            <!-- Restaurant Filter List Starts -->
                            <div class="res-filter-list-section" id="popular">
                                <!-- Restaurant Filter Head Starts -->
                                <div class="res-filter-list-head">
                                    <h5>@lang('user.popular')</h5>
                                </div>

                                 <div class="restaurant-list row">
                                <!-- Restaurant Filter Head Ends -->
                                @forelse(@$Popularity as $Shop)
                                <!-- Restaurant List Starts -->
                               
                                    <!-- Restaurant List Box Starts -->
                                    @if($Shop->shopstatus=='OPEN')
                                    <a href="{{url('/restaurant/details')}}?name={{$Shop->name}}" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    @else
                                    <a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    @endif
                                        <div class="food-img bg-img" style="background-image: url({{$Shop->avatar}});"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">{{$Shop->name}}</h6>
                                            <p class="food-det-txt" title="{{$Shop->description}}">{{$Shop->description}}</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> {{$Shop->rating}}</span>
                                                </div>
                                                <div class="col-xs-3 text-center">
                                                    <span class="food-deliver-time food-list-txt">{{$Shop->estimated_delivery_time}}@lang('user.mins')</span>
                                                </div>
                                                <!-- <div class="col-xs-6 text-right">
                                                    <span class="food-quantity-price food-list-txt">$100 for two</span>
                                                </div> -->
                                            </div>
                                        </div>
                                        @if($Shop->shopstatus=='CLOSED')
                                        <div class="red centered"><div class="text"> Closed</div><div class="opentext"> ({{$Shop->shopopenstatus}})</div></div>
                                        @endif
                                    </a>
                                    <!-- Restaurant List Box Starts -->
                                    @empty
                                        <div>@lang('user.no_records')</div>
                                    @endforelse
                                    
                                </div>
                                <!-- Restaurant List Ends -->
                            </div>
                            <!-- Restaurant Filter List Ends -->
                            <!-- Restaurant Filter List Starts -->
                            <div class="res-filter-list-section" id="fast">
                                <!-- Restaurant Filter Head Starts -->
                                <div class="res-filter-list-head">
                                    <h5>@lang('user.super_fast_delivery')</h5>
                                </div>
                                <!-- Restaurant Filter Head Ends -->
                                <!-- Restaurant List Starts -->
                                <div class="restaurant-list row">
                                 @forelse(@$Fastdelivery as $Shop)
                                    <!-- Restaurant List Box Starts -->
                                    @if($Shop->shopstatus=='OPEN')
                                    <a href="{{url('/restaurant/details')}}?name={{$Shop->name}}" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    @else
                                    <a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    @endif
                                        <div class="food-img bg-img" style="background-image: url({{$Shop->avatar}});"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">{{$Shop->name}}</h6>
                                            <p class="food-det-txt" title="{{$Shop->description}}">{{$Shop->description}}</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> {{$Shop->rating}}</span>
                                                </div>
                                                <div class="col-xs-3 text-center">
                                                    <span class="food-deliver-time food-list-txt">{{$Shop->estimated_delivery_time}}@lang('user.mins')</span>
                                                </div>
                                                <!-- <div class="col-xs-6 text-right">
                                                    <span class="food-quantity-price food-list-txt">$100 for two</span>
                                                </div> -->
                                            </div>
                                        </div>
                                        @if($Shop->shopstatus=='CLOSED')
                                        <div class="red centered"><div class="text"> Closed</div><div class="opentext"> ({{$Shop->shopopenstatus}})</div></div>
                                        @endif
                                    </a>
                                    <!-- Restaurant List Box Starts -->
                                    @empty
                                      <div>@lang('user.no_records')</div>
                                    @endforelse
                                   
                                </div>
                                <!-- Restaurant List Ends -->
                            </div>
                            <!-- Restaurant Filter List Ends -->
                            <!-- Restaurant Filter List Starts -->
                            <div class="res-filter-list-section" id="offers">
                                <!-- Restaurant Filter Head Starts -->
                                <div class="res-filter-list-head">
                                    <h5>@lang('user.offers_around')</h5>
                                </div>
                                <!-- Restaurant Filter Head Ends -->
                                <!-- Restaurant List Starts -->
                                <div class="restaurant-list row">
                                @forelse(@$Offers as $Shop)
                                    <!-- Restaurant List Box Starts -->
                                    @if($Shop->shopstatus=='OPEN')
                                    <a href="{{url('/restaurant/details')}}?name={{$Shop->name}}" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    @else
                                    <a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    @endif
                                        <div class="food-img bg-img" style="background-image: url({{$Shop->avatar}});"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">{{$Shop->name}}</h6>
                                            <p class="food-det-txt" title="{{$Shop->description}}">{{$Shop->description}}</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> {{$Shop->rating}}</span>
                                                </div>
                                                <div class="col-xs-3 text-center">
                                                    <span class="food-deliver-time food-list-txt">{{$Shop->estimated_delivery_time}}@lang('user.mins')</span>
                                                </div>
                                               <!--  <div class="col-xs-6 text-right">
                                                    <span class="food-quantity-price food-list-txt">$100 for two</span>
                                                </div> -->
                                            </div>
                                        </div>
                                        @if($Shop->shopstatus=='CLOSED')
                                        <div class="red centered"><div class="text"> Closed</div><div class="opentext"> ({{$Shop->shopopenstatus}})</div></div>
                                        @endif
                                    </a>
                                    <!-- Restaurant List Box Starts -->
                                @empty
                                    <div>@lang('user.no_records')</div>
                                    
                                @endforelse
                                    
                                </div>
                                <!-- Restaurant List Ends -->
                            </div>
                            <!-- Restaurant Filter List Ends -->
                            <!-- Restaurant Filter List Starts -->
                            <div class="res-filter-list-section" id="vegetarian">
                                <!-- Restaurant Filter Head Starts -->
                                <div class="res-filter-list-head">
                                    <h5>@lang('user.veg_options')</h5>
                                </div>
                                <!-- Restaurant Filter Head Ends -->
                                <!-- Restaurant List Starts -->
                                <div class="restaurant-list row">
                                @forelse(@$vegiterian as $Shop)
                                    <!-- Restaurant List Box Starts -->
                                    @if($Shop->shopstatus=='OPEN')
                                    <a href="{{url('/restaurant/details')}}?name={{$Shop->name}}" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    @else
                                    <a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    @endif
                                        <div class="food-img bg-img" style="background-image: url({{$Shop->avatar}});"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">{{$Shop->name}}</h6>
                                            <p class="food-det-txt" title="{{$Shop->description}}">{{$Shop->description}}</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> {{$Shop->rating}}</span>
                                                </div>
                                                <div class="col-xs-3 text-center">
                                                    <span class="food-deliver-time food-list-txt">{{$Shop->estimated_delivery_time}}@lang('user.mins')</span>
                                                </div>
                                                <!-- <div class="col-xs-6 text-right">
                                                    <span class="food-quantity-price food-list-txt">$100 for two</span>
                                                </div> -->
                                            </div>
                                        </div>
                                        @if($Shop->shopstatus=='CLOSED')
                                        <div class="red centered"><div class="text"> Closed</div><div class="opentext"> ({{$Shop->shopopenstatus}})</div></div>
                                        @endif
                                    </a>
                                    <!-- Restaurant List Box Starts -->
                                @empty
                                   <div>@lang('user.no_records')</div>
                                @endforelse
                                   
                                </div>
                                <!-- Restaurant List Ends -->
                            </div>
                            <!-- Restaurant Filter List Ends -->
                            <!-- Restaurant Filter List Starts -->
                            <div class="res-filter-list-section" id="whats-new">
                                <!-- Restaurant Filter Head Starts -->
                                <div class="res-filter-list-head">
                                    <h5>@lang('user.whats_new')</h5>
                                </div>
                                <!-- Restaurant Filter Head Ends -->
                                <!-- Restaurant List Starts -->
                                <div class="restaurant-list row">
                                @forelse(@$whats_new as $Shop)
                                    <!-- Restaurant List Box Starts -->
                                    @if($Shop->shopstatus=='OPEN')
                                    <a href="{{url('/restaurant/details')}}?name={{$Shop->name}}" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    @else
                                    <a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    @endif
                                        <div class="food-img bg-img" style="background-image: url({{$Shop->avatar}});"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">{{$Shop->name}}</h6>
                                            <p class="food-det-txt" title="{{$Shop->description}}">{{$Shop->description}}</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> {{$Shop->rating}}</span>
                                                </div>
                                                <div class="col-xs-3 text-center">
                                                    <span class="food-deliver-time food-list-txt">{{$Shop->estimated_delivery_time}}@lang('user.mins')</span>
                                                </div>
                                                <!-- <div class="col-xs-6 text-right">
                                                    <span class="food-quantity-price food-list-txt">$100 for two</span>
                                                </div> -->
                                            </div>
                                        </div>
                                        @if($Shop->shopstatus=='CLOSED')
                                        <div class="red centered"><div class="text"> Closed</div><div class="opentext"> ({{$Shop->shopopenstatus}})</div></div>
                                        @endif
                                    </a>
                                    <!-- Restaurant List Box Starts -->
                                @empty
                                    <div>@lang('user.no_records')</div>
                                @endforelse
                                    
                                </div>
                                <!-- Restaurant List Ends -->
                            </div>
                            <!-- Restaurant Filter List Ends -->
                        </div>
                        <!-- Food Section Right Ends -->
                    </div>
                </div>
            </div>
            <!-- Food Section Ends -->
             <!-- All Restaurant List Starts -->
            <div class="all-restaurant-list col-md-12 col-sm-12 col-xs-12" id="see-all">
                <div class="container-fluid">
                    <div class="all-res-tit">
                        <h4><i class="ion-arrow-down-c"></i> @lang('user.all_restaurant')</h4>
                    </div>
                    <div class="all-res-list-inner">
                        <div class="all-res-head row m-0">
                            <div class="all-res-head-left col-md-3 p-0">
                                <h4 class="all-res-head-tit"><a href="#filter-menu"><i class="ion-arrow-up-c up-filter"></i></a> {{count(@$Shops)}} @lang('user.restaurants')</h4>
                            </div>
                            <div class="all-res-head-right col-md-9 p-0 text-right">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active">
                                        <a href="#relevance" aria-controls="relevance" role="tab" data-toggle="tab">@lang('user.relevance')</a>
                                    </li>
                                   <!--  <li>
                                        <a href="#cost-for-two" aria-controls="cost-for-two" role="tab" data-toggle="tab">Cost for Two</a>
                                    </li> -->
                                    <li>
                                        <a href="#delivery-time" aria-controls="delivery-time" role="tab" data-toggle="tab">@lang('user.delivery_time')</a>
                                    </li>
                                    <li>
                                        <a href="#rating" aria-controls="rating" role="tab" data-toggle="tab">@lang('user.index.rating')</a>
                                    </li>
                                    <li>
                                        <a href="#" class="filter-item" onclick="$('#filter-sidebar').asidebar('open')">@lang('user.filter') <i class="fa fa-filter filter-icon"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                         <div class="tab-content all-res-tab-content">
                            <!-- Relevance Tab Contetnt Starts -->
                            <div role="tabpanel" class="tab-pane fade in active" id="relevance">
                                <div class="row">
                                @forelse($Shops as $Shop)
                                    <!-- Restaurant List Box Starts -->
                                    @if($Shop->shopstatus=='OPEN')
                                    <a href="{{url('/restaurant/details')}}?name={{$Shop->name}}" class="food-item-box col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    @else
                                    <a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    @endif

                                        <div class="food-img bg-img" style="background-image: url({{$Shop->avatar}});"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">{{$Shop->name}}</h6>
                                            <p class="food-det-txt" title="{{$Shop->description}}">{{$Shop->description}}</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> {{$Shop->rating}}</span>
                                                </div>
                                                <div class="col-xs-3 text-center">
                                                    <span class="food-deliver-time food-list-txt">{{$Shop->estimated_delivery_time}}@lang('user.mins')</span>
                                                </div>
                                               <!--  <div class="col-xs-6 text-right">
                                                    <span class="food-quantity-price food-list-txt">$100 for two</span>
                                                </div> -->
                                            </div>
                                        </div>
                                        @if($Shop->shopstatus=='CLOSED')
                                        <div class="red centered"><div class="text"> @lang('user.closed')</div></div>
                                        @endif
                                    </a>
                                    <!-- Restaurant List Box Starts -->
                                @empty
                                    <div>@lang('user.no_records')</div>
                                @endforelse
                                   
                                </div>
                            </div>
                            <!-- Relevance Tab Content Ends -->
                            <!-- Cost for Two Tab Contetnt Starts -->
                            <div role="tabpanel" class="tab-pane fade" id="cost-for-two">
                                <div class="row">
                                @forelse($Shops as $Shop)
                                    <!-- Restaurant List Box Starts -->
                                    @if($Shop->shopstatus=='OPEN')
                                    <a href="{{url('/restaurant/details')}}?name={{$Shop->name}}" class="food-item-box col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    @else
                                    <a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    @endif
                                        <div class="food-img bg-img" style="background-image: url({{$Shop->avatar}});"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">{{$Shop->name}}</h6>
                                            <p class="food-det-txt" title="{{$Shop->description}}">{{$Shop->description}}</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> {{$Shop->rating}}</span>
                                                </div>
                                                <div class="col-xs-3 text-center">
                                                    <span class="food-deliver-time food-list-txt">{{$Shop->estimated_delivery_time}}@lang('user.mins')</span>
                                                </div>
                                                <!-- <div class="col-xs-6 text-right">
                                                    <span class="food-quantity-price food-list-txt">$100 for two</span>
                                                </div> -->
                                            </div>
                                        </div>
                                        @if($Shop->shopstatus=='CLOSED')
                                        <div class="red centered"><div class="text"> @lang('user.closed')</div></div>
                                        @endif
                                    </a>
                                    <!-- Restaurant List Box Starts -->
                                @empty
                                    <div>@lang('user.no_records')</div>
                                @endforelse
                                    
                                </div>
                            </div>
                            <!-- Cost for Two Tab Content Ends -->
                            <!-- Delivery Time Tab Contetnt Starts -->
                            <div role="tabpanel" class="tab-pane fade" id="delivery-time">
                                <div class="row">
                                <?php @$delivery_time = @$filter_shop->orderBy('estimated_delivery_time','ASC')->get();
                                        @$delivery_time->map(function ($Shop) {
                                                $Shop['shopstatus'] = (new \App\Http\Controllers\Resource\ShopResource)->shoptime($Shop);;
                                                if($Shop->rating_status==0){
                                                    $Shop['rating'] = (int)(new \App\Http\Controllers\Resource\ShopResource)->ovalallrating($Shop);;
                                                }
                                                return $Shop;
                                            });
                                 ?>
                                @forelse($delivery_time as $Shop)
                                    <!-- Restaurant List Box Starts -->
                                    @if($Shop->shopstatus=='OPEN')
                                    <a href="{{url('/restaurant/details')}}?name={{$Shop->name}}" class="food-item-box col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    @else
                                    <a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    @endif
                                        <div class="food-img bg-img" style="background-image: url({{$Shop->avatar}});"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">{{$Shop->name}}</h6>
                                            <p class="food-det-txt" title="{{$Shop->description}}">{{$Shop->description}}</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> {{$Shop->rating}}</span>
                                                </div>
                                                <div class="col-xs-3 text-center">
                                                    <span class="food-deliver-time food-list-txt">{{$Shop->estimated_delivery_time}}@lang('user.mins')</span>
                                                </div>
                                                <!-- <div class="col-xs-6 text-right">
                                                    <span class="food-quantity-price food-list-txt">$100 for two</span>
                                                </div> -->
                                            </div>
                                        </div>
                                        @if($Shop->shopstatus=='CLOSED')
                                        <div class="red centered"><div class="text"> @lang('user.closed')</div></div>
                                        @endif
                                    </a>
                                    <!-- Restaurant List Box Starts -->
                                @empty
                                    <div>@lang('user.no_records')</div>
                                @endforelse
                                   
                                </div>
                            </div>
                            <!-- Delivery Time Tab Content Ends -->
                            <!-- Rating Tab Contetnt Starts -->
                            <div role="tabpanel" class="tab-pane fade" id="rating">
                                <div class="row">
                                <?php @$rating_shop_all = @$rating_shop->orderBy('rating','DESC')->get();
                                        @$rating_shop_all->map(function ($Shop) {
                                                $Shop['shopstatus'] = (new \App\Http\Controllers\Resource\ShopResource)->shoptime($Shop);;
                                                if($Shop->rating_status==0){
                                                    $Shop['rating'] = (int)(new \App\Http\Controllers\Resource\ShopResource)->ovalallrating($Shop);;
                                                }
                                                return $Shop;
                                            });
                                 ?>
                                @forelse($rating_shop_all as $Shop)
                                    <!-- Restaurant List Box Starts -->
                                    @if($Shop->shopstatus=='OPEN')
                                    <a href="{{url('/restaurant/details')}}?name={{$Shop->name}}" class="food-item-box col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    @else
                                    <a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    @endif
                                        <div class="food-img bg-img" style="background-image: url({{$Shop->avatar}});"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">{{$Shop->name}}</h6>
                                            <p class="food-det-txt" title="{{$Shop->description}}">{{$Shop->description}}</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i>{{$Shop->rating}}</span>
                                                </div>
                                                <div class="col-xs-3 text-center">
                                                    <span class="food-deliver-time food-list-txt">{{$Shop->estimated_delivery_time}}@lang('user.mins')</span>
                                                </div>
                                               <!--  <div class="col-xs-6 text-right">
                                                    <span class="food-quantity-price food-list-txt">$100 for two</span>
                                                </div> -->
                                            </div>
                                        </div>
                                       @if($Shop->shopstatus=='CLOSED')
                                        <div class="red centered"><div class="text"> @lang('user.closed')</div></div>
                                        @endif
                                    </a>

                                    <!-- Restaurant List Box Starts -->
                                @empty
                                    <div>@lang('user.no_records')</div>
                                @endforelse
                                   
                                </div>
                            </div>
                            <!-- Rating Tab Content Ends -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- All Restaurant List Starts -->
        </div>
        <!-- Content Wrapper Ends -->
    </div>
    <!-- Main Warapper Ends -->
    <!-- Filters Starts -->
    <div class="aside right-aside coupon-sidebar" id="filter-sidebar">
        <div class="aside-header">
            <span class="close" data-dismiss="aside"><i class="ion-close-round"></i></span>
            <h5 class="aside-tit">@lang('user.filters')</h5>
        </div>
        <form  action="" >
            
            @if(Request::has('search_loc'))
             <input type="hidden"   value="{{Request::get('search_loc')}}" name="search_loc" />
             @endif
             <input type="hidden"   value="{{Setting::get('search_distance')}}" name="range" />
            @if(Request::has('latitude'))
             <input type="hidden"   value="{{Request::get('latitude')}}" name="latitude" />
            @endif
            @if(Request::has('longitude'))
             <input type="hidden"   value="{{Request::get('longitude')}}" name="longitude" />
            @endif
        <div class="aside-contents">
            <div class="filters-sidebar">
                <!-- Filter Section Starts -->
                <div class="filters-section">
                    <h6>@lang('user.Show_Restaurants_With')</h6>
                    <!-- Filter Box Starts -->
                    <div class="filter-box row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-check">
                                <input type="checkbox" name="offer" @if(Request::get('offer')==1) checked @endif value="1" class="form-check-input" id="filter-1">
                                <label class="form-check-label" for="filter-1">@lang('user.create.offers')</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-check">
                                <input type="checkbox" name="pure_veg" @if(Request::get('pure_veg')==1) checked @endif  value="1" class="form-check-input" id="filter-1">
                                <label class="form-check-label" for="filter-1">@lang('user.pure_veg')</label>
                            </div>
                        </div>
                    </div>
                    <!-- Filter Box Ends -->
                </div>
                <!-- Filter Section Ends -->
                <!-- Filter Section Starts -->
                <div class="filters-section">
                    <h6>@lang('user.Cusine')</h6>
                    <!-- Filter Box Starts -->
                    <div class="filter-box row">
                        <?php $selcusine = Request::get('cuisine'); ?>
                        @forelse($Cuisines as $key=>$Cuisine)
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-check">
                                <input type="checkbox" name="cuisine[{{$key}}]" @if(@$selcusine[$key]==$Cuisine->id) checked @endif  value="{{$Cuisine->id}}" class="form-check-input" id="filter-{{$Cuisine->id}}">
                                <label class="form-check-label" for="filter-{{$Cuisine->id}}">{{$Cuisine->name}}</label>
                            </div>
                        </div>
                        @empty
                        @endforelse
                       
                    </div>
                    <!-- Filter Box Ends -->
                </div>
                <!-- Filter Section Ends -->
            </div>
        </div>
        <!-- Filter Footer Starts -->
        <div class="filter-footer aside-footer">
            <p class="clear-btn clear_checkbox">@lang('user.clear')</p>
            <button type="submit" class="show-btn" data-dismiss="aside">@lang('user.show_restaurants')</button>
        </div>
        <!-- Filter Footer Ends -->
        </form>
    </div>
    <!-- Filters Ends -->
    
    <div class="aside-backdrop"></div>
    <!-- Sidebar Section Ends -->
@endsection
@section('scripts')
 <script type="text/javascript">
   $(document).ready(function() { 
        $('.clear_checkbox').click(function(){
            $('input:checkbox').removeAttr('checked');
        });
    });
        
    </script>
@endsection
@section('styles')
<style>
    .pac-container {
        z-index: 100000000 !important;
    }
</style>
<style type="text/css">
    .red{
        position: absolute;
        /*//text-indent: -9999px;*/
        top: -5px;
        left: -5px;
        background-color: rgba(0,0,0,0.5);
        width: 100%;
        height: 100%;
        z-index: 3;
        opacity: 0.5;
        color: black;
        background-color: red 1px solid;
    }
    .text{
        position: absolute;
        top: 45%;
        left: 50%;
        font-size: 50px;
        color: white;
        transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
    }
    .opentext{
        position: absolute;
        top: 55%;
        line-height: 35px;
        left: 50%;
        font-size: 14px;
        color: white;
        transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
    }
    </style>
@endsection
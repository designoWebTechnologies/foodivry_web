<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{Setting::get('site_title')}}</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ Setting::get('site_favicon', asset('favicon.ico')) }}">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('public/assets/user/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="{{ asset('public/assets/user/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Ionicons CSS -->
    <link href="{{ asset('public/assets/user/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <!-- Material Icons CSS -->
    <link href="{{ asset('public/assets/user/material-icons/css/materialdesignicons.min.css')}}" rel="stylesheet">
    <!-- Slick CSS -->
    <link href="{{ asset('public/assets/user/css/slick.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets/user/css/slick-theme.css')}}" rel="stylesheet">
    <!-- Semantic CSS -->
    <link href="{{ asset('public/assets/user/css/semantic.min.css')}}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{ asset('public/assets/user/css/style.css')}}" rel="stylesheet">
    <style>
    .pac-container {
        z-index: 9999999999999999999 !important;
    }
</style>
<style>
        .header-top {
    position: relative;
    z-index: 99999;
    background: #1d1c1c;
    font-size: 12px;
    width: 100%;
    padding: 11px 20px;
    color: #fff;
    text-align: center;
    }
    .header-top p {
    color: #fff;
    margin-bottom: 0px;
    }
    span.cross-icon.pull-right i {
    color: #fff;
    }
    span.cross-icon.pull-right i:hover {
    cursor: pointer;
    }
    .fixedmenu {
    top: 0px;
    }
    </style>
    @yield('styles')
</head>

<body oncontextmenu="return false;">
@include('user.notification')
    <!-- Main Wrapper Starts -->
    <div class="main-wrapper pusher">
        <!-- Header Starts -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgation-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logoback" href="{{url('/')}}">
                        <img src="{{ Setting::get('site_logo',asset('public/assets/user/img/logo.png'))}}">
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse" id="navgation-1">
                    <ul class="nav navbar-nav">
                        <li>
                            @if(Request::get('myaddress'))
                                <a href="#" class="nav-address">
                                    <b></b>
                                </a>
                            @elseif(Request::segment(1)=='restaurant' || Request::segment(1)=='restaurants')
                                <a href="#" class="nav-address" onclick="$('#nav-location-sidebar').asidebar('open')">
                                   <!--  <span class="sub-address">Park Ave S</span>  -->
                                   @if(Request::segment(1)=='restaurant')
                                   <span class="nav-address-name">{{Session::get('search_loc')}}</span>
                                   <span class="ion-chevron-down address-arrow"></span>
                                   @elseif(Request::segment(1)=='restaurants')
                                    <span class="nav-address-name">{{Request::get('search_loc')}}</span>
                                    <span class="ion-chevron-down address-arrow"></span>
                                    @else
                                    <span class="nav-address-name">{{Session::get('search_loc')}}</span>
                                   <span class="ion-chevron-down address-arrow"></span>
                                    @endif
                                </a>
                            @else
                                 @if(Auth::guest())
                                 @else
                                <span class="nav-address-name"></span>
                                @endif
                            @endif
                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{url('search')}}"><i class="ion-android-search"></i> @lang('user.create.search')</a>
                        </li>
                        <li>
                            <a href="{{url('help')}}"><i class="ion-help-buoy"></i> @lang('user.create.help')</a>
                        </li>
                    @if(Auth::guest())
                        <li> <a href="javascript:void(0);" class="login-item signinform" >@lang('menu.user.login')</a></li>
                        <li><a href="javascript:void(0);" class="active signupform" >@lang('menu.user.register')</a></li>
                        <?php $cart_no =0; ?>
                    @else
                        <?php 
                        $cart = \App\UserCart::list(Auth::user()->id);
                        //dd($cart[0]->product->shop->name);
                        $cart_no = count($cart);?>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ion-ios-person"></i>
                                {{Auth::user()->name}}<strong class="caret"></strong>
                            </a>
                            <ul class="dropdown-menu">
                               <!-- <li>
                                    <a href="{{url('/orders')}}">Profile</a>
                                </li> -->
                                <li>
                                    <a href="{{url('/orders')}}">@lang('user.create.orders')</a>
                                </li>
                                <li>
                                    <a href="{{url('/offers')}}">@lang('user.create.offers')</a>
                                </li>
                                <!--<li>
                                    <a href="{{url('/payments')}}">@lang('user.create.payments')</a>
                                </li>-->
                                <li>
                                    <a href="{{url('/favourite')}}">@lang('user.create.fav')</a>
                                </li>
                                <li>
                                    <a href="{{url('/useraddress')}}">@lang('user.create.address')</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    @lang('menu.user.logout')</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                        </li>
                        @endif
                        
                        
                           <?php 
                           if($cart_no==0){
                                $url = url('restaurant/details?name='.@$Shop->name);
                           }else{
                                $url = url('restaurant/details?name='.@$cart[0]->product->shop->name.'&myaddress=home');
                            }
                            ?>
                      
                        <li class="dropdown">
                            <a href="{{$url}}"><span class="cart-count">{{$cart_no}}</span> Cart</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header Ends -->
    <!-- End Header =============================================== -->
    <form id="home_page_back" action="{{url('restaurants')}}" style="display:none">
        <input type="hidden"  value="{{@Session::get('search_loc')}}" name="search_loc">
        <input type="hidden"  name="latitude" value="{{ @Session::get('latitude') }}" readonly >
        <input type="hidden"  name="longitude" value="{{ Session::get('longitude') }}" readonly >
    </form>
    <!-- End Map -->
    @include('include.alerts')

    @yield('content')
    
  
    <script src="{{ asset('public/assets/user/js/jquery.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('public/assets/user/js/bootstrap.min.js')}}"></script>
    <!-- Slick Slider JS -->
    <script src="{{ asset('public/assets/user/js/slick.min.js')}}"></script>
    <!-- Sidebar JS -->
    <script src="{{ asset('public/assets/user/js/asidebar.jquery.js')}}"></script>
    <!-- Map JS -->
    @include('user.layouts.partials.script')
    <script src="{{ asset('public/assets/user/js/jquery.googlemap.js')}}"></script>
    <!-- Incrementing JS -->
    <script src="{{ asset('public/assets/user/js/incrementing.js')}}"></script>
    <!-- Scripts -->
    <script src="{{ asset('public/assets/user/js/scripts.js')}}"></script>



    @yield('scripts')
    @yield('deliveryscripts')
    <!--<script type="text/javascript">-->
    <!--    $(document).bind("contextmenu",function(e) {-->
    <!--     e.preventDefault();-->
    <!--    });-->
    <!--    $(document).keydown(function(e){-->
    <!--    console.log(e);-->
    <!--    if(e.which === 123){-->
    <!--       return false;-->
    <!--    }-->
    <!--    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {-->
    <!--     return false;-->
    <!--    }-->
    <!--    if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {-->
    <!--     return false;-->
    <!--    }-->
    <!--    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {-->
    <!--     return false;-->
    <!--    }-->
    <!--    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {-->
    <!--     return false;-->
    <!--    }-->
    <!--});-->
    <!--</script>-->
    
       <!-- Start of LiveChat (www.livechatinc.com) code -->
       @if(Setting::get('DEMO_MODE') == 0)

          <script type="text/javascript">
              window.__lc = window.__lc || {};
              window.__lc.license = 8256261;
              (function() {
                  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
                  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
                  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
              })();
          </script> 
          @endif
          <!-- End of LiveChat code -->
		<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113150309-2"></script>
	<script>
	 window.dataLayer = window.dataLayer || [];
 	function gtag(){dataLayer.push(arguments);}
 	gtag('js', new Date());

 	gtag('config', 'UA-113150309-2');
    </script>    --> 
    <script>
$(document).ready(function()
{
$('span.cross-icon').click(function()
{
$('.header-top').slideUp();
$('.navbar').css('top','0px');
});

});
$(window).scroll(function()
{
if($(this).scrollTop()>50)
{
$('header>nav.navbar.navbar-fixed-top').addClass('fixedmenu')
}
else{
$('header>nav.navbar.navbar-fixed-top').removeClass('fixedmenu');
}
});
</script>
</body>

</html>

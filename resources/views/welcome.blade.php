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
	<!-- Style CSS -->
	<link href="{{ asset('public/assets/user/css/style.css')}}" rel="stylesheet">
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
</head>

<body oncontextmenu="return false;">
	@include('user.notification')
	<!-- Login Wrapper Starts -->
	<div class="login-main-wrapper">
		<!-- Login Content Wrap Starts -->
		<div class="login-content-wrap">
			<!-- Login Content Starts -->
			<!--			<nw code start>-->
			<div class="login-content login-content2">
				<div class="container">
					<div class="logollin">
						<div class="logoCo">
							<div class="login-logo login-logonew">
								<a href="#0">
								<img src="{{ Setting::get('site_logo',asset('assets/user/img/logo.png'))}}">
								</a>
							</div>
							<div class=" userModalmob">
								<a href="#0" data-toggle="modal" data-target="#forgetModal"><img src="http://foodivry.com/public/images/profile.svg" alt="profile"></a>
							</div>
							<div class="login-menu login-menunew userModaldesk">
								@if(Auth::guest())
									<a href="javascript:void(0);" class="login-item signinform">Login</a>
									<a href="javascript:void(0);" class="signup-item signupform">Signup</a>
									<a href="javascript:void(0);" class="signup-item ">Contact Us</a>
								@endif
							</div>
						</div>
						<div class="log-location">
							<div class="log-loc-content">
								<h1 class="project"><i><b>FOODIVRY</b></i></h1>
								<h4 class="log-loc-txt">Order Food From Favourite Restaurants Near You.</h4>
								<!-- Location Form Starts -->
								<form action="{{url('restaurants')}}" id="my_map_form">
									<div class="log-location-search input-group">
										<input type="text" id="pac-input" name="search_loc" class="form-control" placeholder="Enter Your Delivery Location" required autofocus>
										<span class="input-group-addon locate-me-btn my_map_form_current"><i class="ion-pinpoint"></i> Locate Me</span>
										<span class="input-group-addon log-search-btn"><button>Find Food</button></span>
									</div>
									<input type="hidden" id="latitude" name="latitude" value="{{ old('latitude') }}" readonly>
									<input type="hidden" id="longitude" name="longitude" value="{{ old('longitude') }}" readonly>
									<div id="my_map" style="height:500px;width:500px;display: none"></div>
								</form>
								<form action="{{url('restaurants')}}" id="my_map_form_current">
									<input type="hidden" id="pac-input_cur" class="form-control search-loc-form" placeholder="Search for area,street name..." name="search_loc" value="{{ old('latitude') }}">
									<input type="hidden" id="latitude_cur" name="latitude" value="{{ old('latitude') }}" readonly>
									<input type="hidden" id="longitude_cur" name="longitude" value="{{ old('longitude') }}" readonly>
								</form>
								<!-- Location Form Ends -->
								<!-- Location Places Starts -->
								<div class="log-location-places">
									<!--  <a href="#" class="log-places">Alabama</a>
	                                <a href="#" class="log-places">Alaska</a>
	                                <a href="#" class="log-places">Alazona</a>
	                                <a href="#" class="log-places">Newyork</a>
	                                <a href="#" class="log-places">Los Angels</a>
	                                <a href="#" class="log-places">California</a>
	                                <a href="#" class="log-places">Florida</a>
	                                <a href="#" class="log-places">New Mexico</a>
	                                <a href="#" class="log-places">Washington</a>
	                                <a href="#" class="log-places">Georgia</a> -->
								</div>
								<!-- Location Places Ends -->
							</div>
						</div>
					</div>
				</div>
				<div class="bannerSlider">
					<div class="bannerImg">
						<div class="login-right-img bg-img bg-img2" style="background-image: url({{ asset('public/images/banner.png')}});"></div>
						<div class="login-right-img bg-img bg-img2" style="background-image: url({{ asset('public/images/banner.png')}});"></div>
						<div class="login-right-img bg-img bg-img2" style="background-image: url({{ asset('public/images/banner.png')}});"></div>
						<div class="login-right-img bg-img bg-img2" style="background-image: url({{ asset('public/images/banner.png')}});"></div>
					</div>
				</div>
			</div>
			<!--			new code end-->
			<!-- Login Location Section Ends -->
			<!-- Feature Section Starts -->
			<div class="feature-section p-80">
				<div class="container">
					<div class="feature-sec-inner row">
						<!-- Feature Block Starts -->
						<div class="feature-block col-md-4 col-sm-4 col-xs-12">
							<img src="{{ asset('public/assets/user/img/feature-1.png')}}" class="feature-img">
							<h4 class="feature-tit">No Minimum Order</h4>
							<p class="feature-txt">Order in for yourself or for the group, with no restrictions on order value.</p>
						</div>
						<!-- Feature Block Ends -->
						<!-- Feature Block Starts -->
						<div class="feature-block col-md-4 col-sm-4 col-xs-12">
							<img src="{{ asset('public/assets/user/img/feature-2.png')}}" class="feature-img">
							<h4 class="feature-tit">Live Order Tracking</h4>
							<p class="feature-txt">Know where your order is at all times, from the restaurant to your doorstep.</p>
						</div>
						<!-- Feature Block Ends -->
						<!-- Feature Block Starts -->
						<div class="feature-block col-md-4 col-sm-4 col-xs-12">
							<img src="{{ asset('public/assets/user/img/feature-3.png')}}" class="feature-img">
							<h4 class="feature-tit">Lightning-Fast Delivery</h4>
							<p class="feature-txt">Experience {{Setting::get('site_title')}}'s superfast delivery for food delivered fresh &amp; on time.</p>
						</div>
						<!-- Feature Block Ends -->
					</div>
				</div>
			</div>
			<!-- Features Section Ends -->
			<!-- Download Section Starts -->
			<div class="download-section">
				<div class="container">
					<!-- Download Section Left Starts -->
					<div class="download-sec-left col-md-5 col-sm-12 col-xs-12">
						<div class="download-sec-left-inner">
							<h2 class="download-tit">Restaurants in your pocket</h2>
							<p class="download-txt">Order from your favorite restaurants & track on the go, with the all-new {{Setting::get('site_title')}} app.</p>
							<ul class="Appbtn">
								<li><a href="{{Setting::get('ANDROID_APP_LINK')}}"><img src="http://foodivry.com/public/images/android.png" class="feature-img"></a></li>
								<li><a href="{{Setting::get('IOS_APP_LINK')}}"><img src="http://foodivry.com/public/images/playstore.png" class="feature-img"></a></li>
							</ul>
							<!-- <div>
								<a href="{{Setting::get('ANDROID_APP_LINK')}}" class="download-img"><img src="{{ asset('public/assets/user/img/android.png')}}"></a>
							    <a href="{{Setting::get('IOS_APP_LINK')}}" class="download-img"><img src="{{ asset('public/assets/user/img/play-store.png')}}"></a>
							</div> -->
						</div>
					</div>
					<!-- Download Section Left Ends -->
					<!-- Download Section Right Starts -->
					<div class="download-sec-right col-md-7 col-sm-12 col-xs-12">
						<div class="row">
							<div class="app-screen-left col-md-6 col-sm-6 col-xs-12">
								<div class="app-screen app-screen-1 bg-img" style="background-image: url({{ asset('public/assets/user/img/app-screen-1.png')}});"></div>
							</div>
							<div class="app-screen-right col-md-6 col-sm-6 col-xs-12">
								<div class="app-screen app-screen-2 bg-img" style="background-image: url({{ asset('public/assets/user/img/app-screen-2.png')}});"></div>
							</div>
						</div>
					</div>
					<!-- Download Section Right Ends -->
				</div>
			</div>
			<!-- Download Section Ends -->
			<div class="foot-places-outer">
				<div class="container">
					<div class="foot-places">
						<!-- <a href="#" class="foot-places-item">Alabama</a>
                        <a href="#" class="foot-places-item">Alaska</a>
                        <a href="#" class="foot-places-item">Alazona</a>
                        <a href="#" class="foot-places-item">Newyork</a>
                        <a href="#" class="foot-places-item">Los Angels</a>
                        <a href="#" class="foot-places-item">California</a>
                        <a href="#" class="foot-places-item">Florida</a>
                        <a href="#" class="foot-places-item">New Mexico</a>
                        <a href="#" class="foot-places-item">Washington</a> -->
					</div>
				</div>
			</div>
		</div>
		<!-- Login Content Wrap Ends -->
		<!-- Footer Starts -->
		@include('user.layouts.partials.footer')
		<!-- Footer Ends -->
	</div>
	<!-- Login Warapper Ends -->
	<!-- Start of Popup Modal of login confirm-->
	<div class="modal  LoginModals fade" id="forgetModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="closeBtn">
					<a href="#0" data-dismiss ="modal">
						<img src="http://foodivry.com/public/images/close.png" alt="profile">
					</a>
				</div>
				<div class="login-menu login-menunew userModaldesk2">
					@if(Auth::guest())
					<a href="javascript:void(0);" class="login-item signinform">Login</a>
					<a href="javascript:void(0);" class="signup-item signupform">Signup</a>
					<a href="javascript:void(0);" class="signup-item ">Contact Us</a>
					@endif
				</div>
			</div>
		</div>
	</div>
	<!-- End of Popup Modal of login confirm-->

	<script src="{{ asset('public/assets/user/js/jquery.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('public/assets/user/js/bootstrap.min.js')}}"></script>
	<!-- Slick Slider JS -->
	<script src="{{ asset('public/assets/user/js/slick.min.js')}}"></script>
	<!-- Sidebar JS -->
	<script src="{{ asset('public/assets/user/js/asidebar.jquery.js')}}"></script>
	<!-- Map JS -->
	<!--<script src="https://maps.googleapis.com/maps/api/js?key={{Setting::get('GOOGLE_API_KEY')}}"></script>-->
	<script src="{{ asset('assets/user/js/jquery.googlemap.js')}}"></script>
	<!-- Incrementing JS -->
	<script src="{{ asset('public/assets/user/js/incrementing.js')}}"></script>
	<!-- Scripts -->
	<script src="{{ asset('public/assets/user/js/scripts.js')}}"></script>
	@include('user.layouts.partials.script')
	<!-- Start of LiveChat (www.livechatinc.com) code -->
	@if(Setting::get('DEMO_MODE') == 0)

	<script type="text/javascript">
		window.__lc = window.__lc || {};
		window.__lc.license = 8256261;
		(function() {
			var lc = document.createElement('script');
			lc.type = 'text/javascript';
			lc.async = true;
			lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(lc, s);
		})();

	</script>
	@endif
	<!-- End of LiveChat code -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!--  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113150309-2"></script>
              <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-113150309-2');
             </script> 	 -->
	<!--<script type="text/javascript">-->
	<!--    $(document).bind("contextmenu",function(e) {-->
	<!-- e.preventDefault();-->
	<!--});-->
	<!--$(document).keydown(function(e){-->
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
	<script>
		$(document).ready(function() {
			$('span.cross-icon').click(function() {
				$('.header-top').slideUp();
				$('.navbar').css('top', '0px');
			});

		});
		$(window).scroll(function() {
			if ($(this).scrollTop() > 50) {
				$('header>nav.navbar.navbar-fixed-top').addClass('fixedmenu')
			} else {
				$('header>nav.navbar.navbar-fixed-top').removeClass('fixedmenu');
			}
		});
	</script>
</body>
</html>
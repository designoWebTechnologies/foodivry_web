<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ Setting::get('site_title') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="shortcut icon" href="{{ Setting::get('site_favicon', asset('favicon.ico')) }}">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/fonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/vendors/css/extensions/pace.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/vendors/css/extensions/unslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/fonts/meteocons/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/vendors/css/charts/morris.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/css/app.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/css/colors.min.css')}}">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/css/core/menu/menu-types/vertical-overlay-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/fonts/simple-line-icons/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/css/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/css/pages/timeline.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css')}}">
    <!-- END Custom CSS-->
    @yield('styles')
    <script>
        window.Sentikart = {!! json_encode(['csrfToken' => csrf_token(), 'map' => 'false']) !!};
    </script>
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
    @yield('content')
            
   <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('public/assets/admin/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    @yield('scripts')

    <script src="{{ asset('public/assets/js/scripts.js') }}" type="text/javascript"></script>
    <!--<script type="text/javascript">-->
    <!--    $(document).bind("contextmenu",function(e) {-->
    <!--     e.preventDefault();-->
    <!--    });-->
    <!--    $(document).keydown(function(e){-->
    <!--        console.log(e);-->
    <!--        if(e.which === 123){-->
    <!--           return false;-->
    <!--        }-->
    <!--        if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {-->
    <!--         return false;-->
    <!--        }-->
    <!--        if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {-->
    <!--         return false;-->
    <!--        }-->
    <!--        if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {-->
    <!--         return false;-->
    <!--        }-->
    <!--        if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {-->
    <!--         return false;-->
    <!--        }-->
    <!--    });-->
    <!--</script>-->
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
</body>
</html>

<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ Setting::get('site_title') }}</title>
   <!--  <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/images/ico/favicon.ico"> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- Favicon -->
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
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/star.rating.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/froala_editor.pkgd.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css')}}">
    <style type="text/css">
        a.navbar-brand img {
        max-width: 20px;
        }
    </style>
    <!-- END Custom CSS-->
    @yield('styles')
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Sentikart = {!! json_encode(['csrfToken' => csrf_token(), 'map' => 'false']) !!};
    </script>
    <!-- <script src="{{ asset('public/assets/admin/js/modernizr.min.js') }}"></script> -->
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" oncontextmenu="return false;">
    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav">
                    <li class="nav-item mobile-menu hidden-md-up float-xs-left">
                        <a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu font-large-1"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="navbar-brand">
                            <img alt="stack admin logo" src="{{ Setting::get('site_logo') ? Setting::get('site_logo') : asset('public/assets/admin/images/logo/stack-logo-light.png') }}" width="50" class="brand-logo">
                            <h4 class="brand-text">{{ Setting::get('site_title') }}</h4>
                        </a>
                    </li>
                    <li class="nav-item hidden-md-up float-xs-right">
                        <a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="fa fa-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content container-fluid">
                <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                    <ul class="nav navbar-nav">
                        <li class="nav-item hidden-sm-down">
                            <a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="ft-menu"></i></a>
                        </li>
                        <li class="nav-item hidden-sm-down">
                            <a href="#" class="nav-link nav-link-expand"><i class="ficon ft-maximize"></i></a>
                        </li>
                        <li class="nav-item nav-search">
                            <a href="#" class="nav-link nav-link-search"><i class="ficon ft-search"></i></a>
                            <div class="search-input">
                                <form  method="get" action="{{url('admin/orders')}}">
                                <input type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" placeholder="Explore Stack..." class="input" name="order_id">
                                </form>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-xs-right">
                        <li class="dropdown dropdown-notification nav-item">
                           <!--  <a href="#" data-toggle="dropdown" class="nav-link nav-link-label">
                                <i class="ficon ft-bell"></i>
                                <span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span>
                            </a> -->
                            <!-- <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 New</span></h6>
                                </li>
                                <li class="list-group scrollable-container">
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left valign-middle"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">You have new order!</h6>
                                                <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">30 minutes ago</time></small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left valign-middle"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading red darken-1">99% Server load</h6>
                                                <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Five hour ago</time></small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left valign-middle"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left valign-middle"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Complete the task</h6><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last week</time></small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left valign-middle"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Generate monthly report</h6><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last month</time></small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all notifications</a></li>
                            </ul> -->
                        </li>
                        <li class="dropdown dropdown-notification nav-item">
                            <!-- <a href="#" data-toggle="dropdown" class="nav-link nav-link-label">
                                <i class="ficon ft-mail"></i>
                                <span class="tag tag-pill tag-default tag-warning tag-default tag-up">3</span>
                            </a> -->
                            <!-- <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0">
                                        <span class="grey darken-2">Messages</span>
                                        <span class="notification-tag tag tag-default tag-warning float-xs-right m-0">4 New</span>
                                    </h6>
                                </li>
                                <li class="list-group scrollable-container">
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('public/assets/admin/images/portrait/small/avatar-s-1.png')}}" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Margaret Govan</h6>
                                                <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start the project.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="{{asset('public/assets/admin/images/portrait/small/avatar-s-2.png')}}" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Bret Lezama</h6>
                                                <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Tuesday</time></small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('public/assets/admin/images/portrait/small/avatar-s-3.png')}}" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Carie Berra</h6>
                                                <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Friday</time></small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="{{asset('public/assets/admin/images/portrait/small/avatar-s-6.png')}}" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Eric Alsobrook</h6>
                                                <p class="notification-text font-small-3 text-muted">We have project party this saturday night.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">last month</time></small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all messages</a></li>
                            </ul> -->
                        </li>
                        <li class="dropdown dropdown-user nav-item">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                                <span class="avatar avatar-online">
                                @if(Auth::user()->avatar)
                                <img src="{{Auth::user()->avatar}}" alt="avatar">
                                @else
                                <img src="{{asset('public/assets/admin/images/portrait/small/avatar-s-1.png')}}" alt="avatar">
                                @endif
                                <i></i>
                                </span><span class="user-name">{{@Auth::user()->name}}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                 <a href="{{url('admin/'.Auth::user()->id.'/profile')}}" class="dropdown-item"><i class="ft-user"></i> Edit Profile</a>
                               <!--  <a href="#" class="dropdown-item"><i class="ft-user"></i> Edit Profile</a>
                                <a href="#" class="dropdown-item"><i class="ft-mail"></i> My Inbox</a>
                                <a href="#" class="dropdown-item"><i class="ft-check-square"></i> Task</a>
                                <a href="#" class="dropdown-item"><i class="ft-message-square"></i> Chats</a> -->
                                <div class="dropdown-divider"></div>
                                <a href="{{ url('admin/logout') }}" class="dropdown-item"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="ft-power"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ url('admin/logout') }}" method="POST">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
     @include('admin.layouts.partials.sidebar')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                @include('include.alerts')
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="footer footer-static footer-light navbar-border">
         <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-xs-block d-md-inline-block">
                {{ Setting::get('site_copyright', '&copy; '.date('Y').' Appoets') }} 
            </span>
        </p>
            
    </footer>
    <audio id="beep-one" controls preload="auto" style="display:none">
    <source src="{{asset('public/assets/audio/beep.mp3')}}" controls></source>
    <source src="{{asset('public/assets/audio/beep.ogg')}}" controls></source>
    Your browser isn't invited for super fun audio time.
    </audio>
    <script>
    var resizefunc = [];
    </script>

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('public/assets/admin/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    @if(Request::segment(2)=='home')
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('public/assets/admin/vendors/js/charts/raphael-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/vendors/js/charts/morris.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/vendors/js/extensions/unslider-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/vendors/js/timeline/horizontal-timeline.js') }}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    @endif
    <!-- BEGIN STACK JS-->
    <script src="{{ asset('public/assets/admin/js/core/app-menu.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/js/core/app.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/js/scripts/customizer.min.js') }}" type="text/javascript"></script>
    <!-- END STACK JS-->
    @if(Request::segment(2)!='home')

    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('public/assets/admin/vendors/js/tables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/vendors/js/tables/datatable/dataTables.bootstrap4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/vendors/js/tables/datatable/dataTables.buttons.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/vendors/js/tables/buttons.flash.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/vendors/js/tables/jszip.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/vendors/js/tables/pdfmake.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/vendors/js/tables/vfs_fonts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/vendors/js/tables/buttons.html5.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/vendors/js/tables/buttons.print.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/vendors/js/extensions/jquery.raty.js') }}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->

     <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('public/assets/admin/js/scripts/tables/datatables/datatable-advanced.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/js/scripts/extensions/rating.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <script src="{{ asset('public/assets/js/star.rating.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/froala_editor.pkgd.min.js')}}" type="text/javascript"></script>
    
    @endif
    
    @yield('scripts')

    <script src="{{ asset('public/assets/js/scripts.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/0.0.11/push.min.js"></script>
    <script type="text/javascript">/*
        console.log(localStorage.getItem('mykey'));*/
        var mykey = localStorage.getItem('mykey');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/aes.js"></script>
    <script src="{{ asset('js/crypto.js') }}" type="text/javascript"></script>
    @if(Request::segment(2)!='orders')
    <div id="container" style="display:none"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.13.3/react.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.13.3/JSXTransformer.js"></script>

    <script type="text/jsx">
    
         var total_order = 0 ;var curstatus = ''; ;
        var beepOne = $("#beep-one")[0];
        var dataitems=[];
        var MainComponent = React.createClass({
            getInitialState: function () {
                    return {data: [], currency : "{{Setting::get('currency')}}"};
                },
            componentDidMount: function(){
                $.ajax({
                  url: "{{url('admin/orders')}}?t=pending&q=1&delivery_date={{Request::get('delivery_date')}}",
                  type: "GET"})
                  .done(function(res){
                  response = res;
                    clearconsole();
                    dataitems = response;
                        this.setState({
                            data:response
                        });

                    }.bind(this));

                    setInterval(this.checkRequest, 5000);
            },
            checkRequest : function(){
                $.ajax({
                  url: "{{url('admin/orders')}}?t=pending&q=1&delivery_date={{Request::get('delivery_date')}}",
                  type: "GET"})
                  .done(function(res){
                        clearconsole();
                        response = res;
                        dataitems = response;
                        if(total_order==0){
                            total_order = response.length;
                        } 
                        if(total_order < response.length){
                            shownotify();
                            total_order = response.length;
                        }
                        this.setState({
                            data:response
                        });

                    }.bind(this));
            },
            render: function(){
                var listItems = this.state.data.map(function(item) { 
                var message = item.status;
                $(document).on("click", '#btn-info_'+item.id+'' , function() {
                            ongoingInitialize(item);
                            $('#order_track_id').val(item.id);
                });
                if($('#order_track_id').val() == item.id){
                    if(curstatus != item.status){ 
                        $('#btn-info_'+item.id+'').trigger('click');
                        curstatus = item.status;
                    }
                }
                var cancel_div =<div className="delete-block">
                            <form action={`{{url('admin/orders/')}}/${item.id}`} id="assign-item.id" className="form-horizontal" method="POST">
                               <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <input type="hidden" name="_method" value="PATCH" />
                                <input type="hidden" name="status" value="CANCELLED" />
                                <button className="btn  btn-danger  btn-darken-3 del-icon">
                                   <i className="ft-trash-2"></i>
                                </button>
                            </form>
                        </div>;
                if(item.status=='RECEIVED'){
                    var message = "";
                    var bgcol ="card card-inverse pending-block row m-0  bg-danger  ";
                    var btncol ="btn   btn-danger    btn-darken-3 orderlist";
                    @if(Setting::get('manual_assign')==1)
                    var assign='';
                    if(item.canassign==1){
                    var message = "{{trans('order.dispatcher.waiting')}}";
                    }else{
                    var message = "{{trans('order.dispatcher.schedule')}}";
                    }
                    
                    var assign1 =<a href={`{{url('admin/orders/')}}/${item.id}?t=pending&p=auto`} className="btn btn-danger btn-darken-3">{{trans("order.dispatcher.assign")}}</a>;
                    @else
                   
                    if(item.canassign==1){
                    var assign =<a href={`{{url('admin/orders/')}}/${item.id}?t=pending`} className="btn btn-danger btn-darken-3">{{trans("order.dispatcher.assign")}}</a>;
                    }else{
                    var message ="{{trans("order.dispatcher.schedule")}}";
                    }
                    @endif

                }else if(item.status=='READY'){
                    var bgcol ="card card-inverse pending-block row m-0  bg-primary  ";
                    var btncol ="btn   btn-primary    btn-darken-3 orderlist";
                    var assign ='';
                    var message = "{{trans('order.dispatcher.waiting')}}";
                }else if(item.status=='PROCESSING'){
                    var message = "{{trans('order.dispatcher.packed')}}";
                    var bgcol ="card card-inverse pending-block row m-0  bg-primary  ";
                    var btncol ="btn   btn-primary    btn-darken-3 orderlist";
                    var assign ='';
                }else if(item.status=='CANCELLED'){
                    var message = "";
                    var bgcol ="card card-inverse pending-block row m-0  bg-primary  ";
                    var btncol ="btn   btn-primary    btn-darken-3 orderlist";
                    var assign ='';
                    var cancel_div = "";
                }else{
                    var bgcol ="card card-inverse pending-block row m-0  bg-success  ";
                    var btncol ="btn   btn-success    btn-darken-3 orderlist";
                    var assign ='';
                    if(item.status=='ORDERED'){
                        var message = "{{trans('order.dispatcher.incoming_request')}}";
                    }
                    if(item.status=='ASSIGNED'){
                        var message = "{{trans('order.dispatcher.assigned')}}";
                    }
                }
                if(item.dispute=='CREATED'){
                var message = "{{trans('order.dispatcher.dispute')}}";
                var assign ='';
                }
                if(item.dispute=='CREATED' && item.status=='CANCELLED'){
                var message = "";
                var assign ='';
                }
                    return (
                        <div key={item.id} className={bgcol} id={`btn-info_${item.id}`}>
                        <div className="card-block">
                            <div className="col-sm-3 card-top text-xs-center">
                                <div className="pending-dp-img bg-img"  >
                                    <img src={item.user.avatar} className="pending-dp-img bg-img" styles="height:50px;width:50px" />
                                </div>
                            </div>
                            <div className="col-sm-9">
                                <div className="card-btm pending-btm">
                                    <p className="card-txt"><b>#{item.id}</b></p>
                                    <p className="card-txt">{item.user.name}</p>
                                    <p className="card-txt">{item.user.phone}</p>
                                </div>
                                <div className="card-btm row m-0">
                                    <button className={btncol} data-id={item.id}>Order List</button>
                                    @if(Setting::get('manual_assign')==1)
                                               <span>{assign}</span>
                                            @else
                                                <span>{assign}</span>
                                            @endif
                                    <span className="tag batch">{message}</span>
                                    <a href={`chat?order_id=${item.id}`} className="btn btn-danger btn-darken-3" target="_blank">Chat</a>   
                                </div>
                            </div>
                        </div>
                       {cancel_div}
                    </div>
                    );
                });

                return (
                    <div>
                    {listItems}    
                    </div>  
                );
            }
        });

         
        React.render(<MainComponent  />,document.getElementById("container"));
        </script>
    @endif
    <script type="text/javascript">
    var beepOne = $("#beep-one")[0];
        Push.Permission.request();
        function shownotify(){
            var beepOne = $("#beep-one")[0];
            beepOne.play();
            Push.create("{{ Setting::get('site_title') }}", {
                body: 'New Order notification.',
                icon: "{{ Setting::get('site_logo')}}",
                //timeout: 2000,               // Timeout before notification closes automatically.
                vibrate: [100, 100, 100],    // An array of vibration pulses for mobile devices.
                onClick: function() {
                    // Callback for when the notification is clicked. 
                    
                    window.open("{{URL('/admin/orders?t=pending')}}"); 
                },
                onShow: function(){
                    
                }
            });
        }

        /*window.setInterval(function(){
          /// call your function here
          shownotify();
        }, 5000);*/

/*$(document).bind("contextmenu",function(e) {
 e.preventDefault();
});
$(document).keydown(function(e){
    
    if(e.which === 123){
       return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
    }
});*/

function clearconsole()
 { 
   
   if(window.console )
   {    
     //console.clear();  
   }
   
 }

/* var parent = window.document.getElementById("appmenuPrimaryPane");
var makeTheTea = gBrowser.ownerDocument.defaultView.document.createElementNS("http://www.mozilla.org/keymaster/gatekeeper/there.is.only.xul", "menuitem");
makeTheTea.setAttribute("label", "A nice cup of tea?");
parent.appendChild(makeTheTea);*/




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
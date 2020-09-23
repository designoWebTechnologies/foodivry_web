<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ Setting::get('site_title') }}</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/images/ico/favicon.ico">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css')}}">
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
    @if(Request::segment(2)=='orders')
        <!-- <meta http-equiv="refresh" content="60"> -->
    @endif
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
                            <img alt="stack admin logo" src="{{ Auth::user()->avatar ? Auth::user()->avatar : asset('public/assets/admin/images/logo/stack-logo-light.png') }}" width="50" class="brand-logo">
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
                                <form  method="get" action="{{url('shop/orders')}}">
                                <input type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" placeholder="Explore Stack..." class="input" name="order_id">
                                </form>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-xs-right">
                        <li class="dropdown dropdown-notification nav-item">
                            <a href="{{url('shop/orders')}}?t=pending"  class="nav-link nav-link-label">
                                <i class="ficon ft-bell"></i>
                                <span class="tag tag-pill tag-default tag-danger tag-default tag-up" id="tot_incom_order">{{count(Auth::user()->orders->where('status','ORDERED'))}}</span>
                            </a>
                        
                        </li>
                        <li class="dropdown dropdown-notification nav-item">
                            
                        </li>
                        <li class="dropdown dropdown-user nav-item">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                                <span class="avatar avatar-online">
                                @if(Auth::user()->avatar)
                                <img src="{{Auth::user()->avatar}}" alt="avatar">
                                @else
                                <img src="{{asset('public/assets/admin/images/portrait/small/avatar-s-1.png')}}" alt="avatar">
                                @endif
                                <i></i></span><span class="user-name">{{Auth::user()->name}}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-divider"></div>
                                <a href="{{ url('shop/logout') }}" class="dropdown-item"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="ft-power"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ url('shop/logout') }}" method="POST">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
     @include('shop.layouts.partials.sidebar')
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
      <!-- BEGIN STACK JS-->
    <script src="{{ asset('public/assets/admin/js/core/app-menu.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/js/core/app.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/js/scripts/customizer.min.js') }}" type="text/javascript"></script>
    <!-- END STACK JS-->
    @else
    <!-- BEGIN STACK JS-->
    <script src="{{ asset('public/assets/admin/js/core/app-menu.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/js/core/app.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/admin/js/scripts/customizer.min.js') }}" type="text/javascript"></script>
    <!-- END STACK JS-->
   

    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('public/assets/admin/vendors/js/tables/jquery.dataTables.min.js') }}" type="text/javascript"></script>') }}
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
    @endif
    
    @yield('scripts')

    <script src="{{ asset('public/assets/js/scripts.js') }}" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/0.0.11/push.min.js"></script>
     @if(Request::segment(2)!='orders')
     <div id="container" style="display:none"></div>
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.13.3/react.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.13.3/JSXTransformer.js"></script>

    <script type="text/jsx">
        var total_order = 0 ; var curstatus = '';
       var beepOne = $("#beep-one")[0];
        var dataitems=[];
        var MainComponent = React.createClass({
            getInitialState: function () {
                    return {data: [], currency : "{{Setting::get('currency')}}"};
                },
            componentDidMount: function(){
                $.ajax({
                  url: "{{url('shop/orders?t='.Request::get('t'))}}",
                  type: "GET",
                  data:{'delivery_date':"{{Request::get('delivery_date')}}"}
                  })
                  .done(function(response){
                   
                    dataitems = response;
                        this.setState({
                            data:response.Orders
                        });

                    }.bind(this));

                    setInterval(this.checkRequest, 5000);
            },
            checkRequest : function(){
                $.ajax({
                  url: "{{url('shop/orders?t=pending')}}",
                  type: "GET",
                  data:{'delivery_date':"{{Request::get('delivery_date')}}"}
                  })
                  .done(function(response){ 
                        dataitems = response;
                         if(total_order==0){
                          total_order = response.Orders.length;
                        } console.log(total_order+''+response.Orders.length);
                        if(total_order < response.Orders.length){
                         shownotify();
                         total_order = response.Orders.length;
                        }
                        this.setState({
                            data:response.Orders
                        });
                        $('#tot_incom_order').html(response.tot_incom_resp);
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
                if(item.status=='ORDERED'){
                    var message = "";
                    if(item.schedule_status==1){
                        var bgcol ="card card-inverse pending-block row m-0  bg-primary  ";
                        var btncol ="btn     btn-danger    btn-darken-3 orderlist";
                        var btncol_rcv ="btn  received   btn-danger    btn-darken-3 ";
                        var btncol_cnl ="btn     btn-danger    btn-darken-3 ";
                    }else{
                        var bgcol ="card card-inverse pending-block row m-0  bg-danger  ";
                        var btncol ="btn   btn-danger    btn-darken-3 orderlist";
                        var btncol_rcv ="btn  received   btn-danger    btn-darken-3 ";
                        var btncol_cnl ="btn     btn-danger    btn-darken-3 ";
                    }
                    
                    var assign =<form action={`{{url('shop/orders/')}}/${item.id}`} id={`assign-${item.id}`} className="form-horizontal" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="hidden" name="_method" value="PATCH" />
                        <input type="hidden" name="status" value="RECEIVED" />
                        <button type="button" data-id={item.id} className={btncol_rcv}>
                            <i className="fa fa-check-square-o"></i>
                        </button>
                    </form>;
              
                var cancel=<form action={`{{url('shop/orders/')}}/${item.id}`} id={`assign-${item.id}`} className="form-horizontal" method="POST">
                       <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <input type="hidden" name="_method" value="PATCH" />
                        <input type="hidden" name="status" value="CANCELLED" />
                        <button className={btncol_cnl}>
                            <i className="ft-x"></i>
                        </button>
                    </form>;
                    
                }else if(item.status=='READY'){
                    var bgcol ="card card-inverse pending-block row m-0  bg-primary  ";
                    var btncol ="btn   btn-primary    btn-darken-3 orderlist";
                    var assign ='';
                    var message = "{{trans('order.dispatcher.waiting')}}";
                    var cancel ='';
                }else if(item.status=='PROCESSING'){
                    var message = "{{trans('order.dispatcher.packed')}}";
                    var bgcol ="card card-inverse pending-block row m-0  bg-primary  ";
                    var btncol ="btn   btn-primary    btn-darken-3 orderlist";
                    var cancel ='';
                    var assign =<form action={`{{url('shop/orders/')}}/${item.id}`} id={`assign-${item.id}`} className="form-horizontal" method="POST">
                       <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="hidden" name="_method" value="PATCH"/>
                        <input type="hidden" name="status" value="READY"/>
                        <button className={btncol}>
                            <i className="fa fa-check-square-o"></i>
                        </button>
                    </form>;
                }else if(item.status=='CANCELLED'){
                    
                    var bgcol ="card card-inverse pending-block row m-0  bg-primary  ";
                    var btncol ="btn   btn-primary    btn-darken-3 orderlist";
                    var assign ='';
                    var cancel ='';
                }else{
                    var bgcol ="card card-inverse pending-block row m-0  bg-success  ";
                    var btncol ="btn   btn-success    btn-darken-3 orderlist";
                    //var message = "{{trans('order.dispatcher.assigned')}}";
                    var assign ='';
                    var cancel ='';
                }
                if(item.dispute=='CREATED'){
                var message = "{{trans('order.dispatcher.dispute')}}";
                var assign ='';
                var cancel ='';
                }
                    return (
                        <div key={item.id} className={bgcol} id={`btn-info_${item.id}`} >
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
                                    {item.id?<div className="form-group col-sm-4">
                                         <button className={btncol} data-id={item.id}>Order List</button>
                                    </div>:''}
                                        {assign?<div className="form-group col-sm-2">
                                        {assign}</div>:''}
                                        {cancel?<div className="form-group col-sm-2">
                                        {cancel}</div>:''}
                                        {message?<div className="form-group col-sm-2">
                                        <span className="tag batch">{message}</span>
                                        </div>:''}
                                </div>
                            </div>
                        </div>
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
                //timeout: 8000,               // Timeout before notification closes automatically.
                vibrate: [100, 100, 100],    // An array of vibration pulses for mobile devices.
                onClick: function() {
                    // Callback for when the notification is clicked. 
                    console.log(this);
                    window.open("{{URL('/shop/orders?t=pending')}}"); 
                },
                onShow: function(){
                    
                }
            });
        }

        /*window.setInterval(function(){
          /// call your function here
          shownotify();
        }, 5000);*/
        // $(document).bind("contextmenu",function(e) {
        //  e.preventDefault();
        // });
        // $(document).keydown(function(e){
        //     console.log(e);
        //     if(e.which === 123){
        //        return false;
        //     }
        //     if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
        //      return false;
        //     }
        //     if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
        //      return false;
        //     }
        //     if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
        //      return false;
        //     }
        //     if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
        //      return false;
        //     }
        // });
    </script>
</body>
</html>

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
            <a href="javascript:void(0)" id="logo">
                <img src="{{ asset(Setting::get('site_logo', 'logo.png')) }}" height="50" alt="" data-retina="true" class="">
            </a>
            <form id="home_page_back">
                <input type="text" id="pac-input" class="form-control search-loc-form pac-input" placeholder="Search for area,street name..." value="{{Session::get('search_loc')}}" name="search_loc">
                <input type="hidden" id="latitude" name="latitude" value="{{ Session::get('latitude') }}" readonly >
                <input type="hidden" id="longitude" name="longitude" value="{{ Session::get('longitude') }}" readonly >
            </form>
            </div>
            
            <nav class="col-md-8 col-sm-8 col-xs-8">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>@lang('user.footer.menu_mobile')</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="{{ asset(Setting::get('site_logo', 'logo.png')) }}" width="190" height="23" alt="" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                    <ul>
                        <li class="submenu">
                            <a href="{{ route('index') }}">@lang('user.footer.home')</a>
                        </li>
                        <li class="submenu">
                            <a href="#">@lang('user.footer.grocery_shop')</a>
                        </li>
                        <li><a href="#">>@lang('user.footer.about_us')</a></li>
                        <li><a href="#">@lang('user.footer.faq')</a></li>
                        <li><a href="#">@lang('user.footer.orders')</a></li>
                        <li><a href="#">@lang('user.footer.profile')</a></li>
                        <li><a href="#0" data-toggle="modal" data-target="#login_2">@lang('user.footer.login')</a></li>
                        <li><a href="#0" data-toggle="modal" data-target="#register">@lang('user.register')</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
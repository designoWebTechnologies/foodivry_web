<footer class="footer">
    <div class="container">
        <!-- Foot Top Starts -->
        <div class="foot-top row">
            <!-- Foot Block Starts -->
            <div class="foot-block col-md-3 col-sm-12 col-xs-12">
                <h5 class="foot-tit">@lang('user.footer.company')</h5>
                <div>
                    <a href="{{url('/aboutus')}}" class="foot-item">@lang('user.footer.about')</a>
                    <a href="{{url('/queries')}}" class="foot-item">@lang('user.footer.help') &amp; @lang('user.footer.support')</a>
                    <!--<a href="{{url('/')}}" class="foot-item">@lang('user.footer.team')</a>-->
                    <!--<a href="{{url('/contact')}}" class="foot-item">@lang('user.footer.carriers')</a>-->
                    <!--<a href="{{url('/')}}" class="foot-item">@lang('user.footer.blog')</a>-->
                    <a href="{{url('/otherterms')}}" class="foot-item">@lang('user.footer.offer')</a>
                </div>
            </div>
            <!-- Foot Block Ends -->
            <!-- Foot Block Starts -->
            <div class="foot-block col-md-3 col-sm-12 col-xs-12">
                <h5 class="foot-tit">@lang('user.footer.contact')</h5>
                <div>
                    <a href="{{url('enquiry-delivery')}}" class="foot-item">@lang('user.footer.partner')</a>
                    <a href="{{url('contact')}}" class="foot-item">@lang('user.footer.contact')</a>
                    <a href="{{url('help')}}" class="foot-item">@lang('user.footer.help')</a>
                </div>
            </div>
            <!-- Foot Block Ends -->
            <!-- Foot Block Starts -->
            <div class="foot-block col-md-3 col-sm-12 col-xs-12">
                <h5 class="foot-tit">@lang('user.footer.legal')</h5>
                <div>
                    <a href="{{url('terms')}}" class="foot-item">@lang('user.footer.terms') &amp; @lang('user.footer.conditions')</a>
                    <a href="{{url('/refund')}}" class="foot-item"> @lang('user.footer.refund') &amp;  @lang('user.footer.cancellation')</a>
                    <a href="{{url('/privacy')}}" class="foot-item">@lang('user.footer.privacy') </a>
                </div>
            </div>
            <!-- Foot Block Ends -->
            <!-- Foot Block Starts -->
            <div class="foot-block col-md-3 col-sm-12 col-xs-12">
                <div class="foot-download-img-sec">
                    <a href="{{Setting::get('IOS_APP_LINK')}}" class="foot-download-img" target="_blank"><img src="{{ asset('public/assets/user/img/ios-app.png')}}"></a>
                </div>
                <div class="foot-download-img">
                    <a href="{{Setting::get('ANDROID_APP_LINK')}}" class="foot-download-img" target="_blank"><img src="{{ asset('public/assets/user/img/android-app-trans.png')}}"></a>
                </div>
            </div>
            <!-- Foot Block Ends -->
        </div>
        <!-- Foot Top Ends -->
        <!-- Foot Bottom Starts -->
        <div class="foot-btm row">
            <div class="col-md-4">
                <div class="foot-logo"><img src="{{ Setting::get('site_logo',asset('public/assets/user/img/logo.png'))}}"></div>
            </div>
            <div class="col-md-4 text-center">
                <p class="copy-txt">{{Setting::get('site_copyright')}}</p>
            </div>
            <div class="foot-social col-md-4 text-right">
                <a href="{{Setting::get('SOCIAL_FACEBOOK_LINK')}}" target="_blank" class="foot-social-item"><i class="fa fa-facebook"></i></a>
                <a href="{{Setting::get('SOCIAL_PINTEREST_LINK')}}" target="_blank" class="foot-social-item"><i class="fa fa-pinterest-p"></i></a>
                <a href="{{Setting::get('SOCIAL_INSTAGRAM_LINK')}}" target="_blank" class="foot-social-item"><i class="fa fa-instagram"></i></a>
                <a href="{{Setting::get('SOCIAL_TWITTER_LINK')}}" target="_blank" class="foot-social-item"><i class="fa fa-twitter"></i></a>
            </div>
        </div>
        <!-- Foot Bottom Ends -->
    </div>
</footer>
<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <form action="#" class="popup-form" id="myLogin">
                <div class="login_icon"><i class="icon_lock_alt"></i></div>
                <input type="text" class="form-control form-white" placeholder="Username">
                <input type="text" class="form-control form-white" placeholder="Password">
                <div class="text-left">
                    <a href="#">@lang('user.create.forgot_your_password')?</a>
                </div>
                <button type="submit" class="btn btn-submit">@lang('user.create.submit')</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <form action="#" class="popup-form" id="myRegister">
                <div class="login_icon"><i class="icon_lock_alt"></i></div>
                <div class="social-log">
                    <a href="#" class="social-reg"><i class="icon-facebook"></i>@lang('user.create.login_with_facebook')</a>
                </div>
                <p class="text-center or">@lang('user.create.or')</p>
                <input type="text" class="form-control form-white" placeholder="@lang('user.create.name')">
                <input type="text" class="form-control form-white" placeholder="@lang('user.create.last_name')">
                <input type="email" class="form-control form-white" placeholder="@lang('user.create.email')">
                <input type="text" class="form-control form-white" placeholder="@lang('user.create.password')" id="password1">
                <input type="text" class="form-control form-white" placeholder="@lang('user.create.confirm_password')" id="password2">
                <div id="pass-info" class="clearfix"></div>
                <div class="checkbox-holder text-left">
                    <div class="checkbox">
                        <input type="checkbox" value="accept_2" id="check_2" name="check_2" />
                        <label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                    </div>
                </div>
                <button type="submit" class="btn btn-submit">@lang('user.register')</button>
            </form>
        </div>
    </div>
</div>
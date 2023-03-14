{{-- @extends('layouts.app') --}}
@extends('frontend.layout.user_layout')
<style>
    div#main-wrapper {
        padding-top: 8% !important;
    }
</style>
@section('contents')
    <div id="main-wrapper" class="layout-main-wrapper clearfix">
        <div role="main" class="main-container container">
            <div class="row login-form-row shadow mx-1">
                <div class="col-6 p-0 d-none d-xl-block">
                    <img class="img-fluid" src="{{ asset('assets/image/login_bg.png') }}" alt="Construction Login" />
                </div>
                <div id="auth-box" class="login-form-wrapper col-xl-6 col-12 px-sm-5 mx-auto">
                    <div id="middle-part">
                        <h1 class="block-title">
                            <span>
                                Log in
                            </span>
                        </h1>
                        <div id="block-ps-new-content" class="block block-system block-system-main-block">

                            <div class="content">
                                  
                                <form class="user-login-form" data-drupal-selector="user-login-form"
                                    action="{{ route('login') }}" method="post"
                                    id="user-login-form" accept-charset="UTF-8">
                                    @csrf

                                    <fieldset
                                        class="js-form-item js-form-type-email form-type-email js-form-item-name form-item-name form-group">
                                        <label for="edit-name" class="js-form-required form-required">Email</label>
                                        <input autocorrect="none" autocapitalize="none" spellcheck="false"
                                            autofocus="autofocus" data-drupal-selector="edit-name" type="email"
                                            id="edit-name" name="email" value="" size="60" maxlength="254"
                                            placeholder="Enter an email" class="form-email required form-control"
                                            required="required" aria-required="true" />
                                    </fieldset>

                                    <fieldset
                                        class="js-form-item js-form-type-password form-type-password js-form-item-pass form-item-pass form-group">
                                        <label for="edit-pass" class="js-form-required form-required">Password</label>
                                        <input data-drupal-selector="edit-pass" type="password" id="edit-pass"
                                            name="password" size="60" maxlength="128" placeholder="Enter a password"
                                            class="form-text required form-control" required="required"
                                            aria-required="true" />

                                    </fieldset>
                                    <input autocomplete="off"
                                        data-drupal-selector="form-j4edwbwomay28mcdft8pne9y-f5cfrxmzmsvvd0lwcu"
                                        type="hidden" name="form_build_id"
                                        value="form-J4eDWbWoMAY28MCdFT8PnE9y_f5CFrXmZMSvvd0lWcU" class="form-control" />
                                    <input data-drupal-selector="edit-user-login-form" type="hidden" name="form_id"
                                        value="user_login_form" class="form-control" />

                                    <div
                                        class="js-form-item js-form-type-checkbox checkbox custom-control custom-checkbox js-form-item-persistent-login form-item-persistent-login">
                                        <input data-drupal-selector="edit-persistent-login" type="checkbox"
                                            id="edit-persistent-login" name="remember" value="1"
                                            class="form-checkbox custom-control-input">
                                        <label class="custom-control-label" for="edit-persistent-login">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="{{ route('password.request') }}" class="forgot-link" data-drupal-selector="edit-forgot-password"
                                        id="edit-forgot-password">Forgot Password?</a>
                                    <div class="register_account"><span>You don't have an Account? </span><a
                                            href="{{ route('register') }}" data-drupal-selector="edit-register-account"
                                            id="edit-register-account">Register Now</a></div>
                                    <div data-drupal-selector="edit-captcha" class="captcha"><input
                                            data-drupal-selector="edit-captcha-sid" type="hidden" name="captcha_sid"
                                            value="812004" class="form-control" />
                                        <input data-drupal-selector="edit-captcha-token" type="hidden" name="captcha_token"
                                            value="2Ze6kHiGxCMWoH32R2G87bwnYbBRds-d0flZ1vQROkc" class="form-control" />
                                        <input id="recaptcha-v3-token" class="recaptcha-v3-token form-control"
                                            data-recaptcha-v3-action="general_action"
                                            data-recaptcha-v3-site-key="6LeDTakZAAAAAPCSF-tqEAg_yc3yPFr9HOMTkU_Q"
                                            data-drupal-selector="edit-captcha-response" type="hidden"
                                            name="captcha_response" value="" />
                                        <input data-drupal-selector="edit-is-recaptcha-v3" type="hidden"
                                            name="is_recaptcha_v3" value="1" class="form-control" />
                                    </div>
                                    <div data-drupal-selector="edit-actions"
                                        class="form-actions js-form-wrapper form-group" id="edit-actions"><button
                                            data-drupal-selector="edit-submit" type="submit" id="edit-submit"
                                            name="op" value="Login"
                                            class="button js-form-submit form-submit btn btn-primary">Login</button>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection

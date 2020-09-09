@extends('pages.layout.master')

@section('title', 'Reset Password')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="css/destinations.css">
    <link rel="stylesheet" type="text/css" href="css/destinations_responsive.css">
    <link rel="stylesheet" type="text/css" href="css/my_styles">
@endsection

<!-- Content Home -->
@section('Content')
    <!-- Home -->

    <div class="home page_ticket">

        <div class="background_image"
             style="background-image:url({{ asset('img/planes_login.jpg') }})"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            {{-- <div class="home_title "><h2>Flight Schedule</h2></div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Search -->

    <!-- Main -->
    @if(session()->get('step') == null && !isset($step))
        <div class="login_main" style="">
            <div class="container">
                <div class=" row">
                    <div id="main" style="height: 350px">
                        <div class="login">
                            {{--<div class="logo">
                                <div class="media-body">
                                    <h5>ARS.CODEDY</h5> <span>airline</span>
                                </div>
                            </div>--}}
                            <div class="title">
                                <h3 class="mb-4">Reset your password</h3>
                                <h4>Enter your user account's verified email address and we will send you a password
                                    reset
                                    link.</h4>
                            </div>
                            <div class="login-body">
                                <form method="post" onsubmit="preloaderActive(9999)">
                                    @csrf
                                    <input type="hidden" id="action" name="action" value="send_password_reset_email">
                                    <div class="">
                                        <input type="email" id="email" name="email"
                                               placeholder="Enter your email address"
                                               value="{{ old('email') }}" required>
                                    </div>
                                    <div class="submit-form w-100 mt-3 text-center container-login100-form-btn">
                                        <button type="submit" class="btn mt-3 w-100" style="font-weight: 400">
                                            Send password reset email
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(session()->get('step') == 'mail_sent_successfully')
        <div class="login_main" style="">
            <div class="container">
                <div class=" row">
                    <div id="main" style="height: 300px">
                        <div class="login">
                            {{--<div class="logo">
                                <div class="media-body">
                                    <h5>ARS.CODEDY</h5> <span>airline</span>
                                </div>
                            </div>--}}
                            <div class="title">
                                <h3 class="mb-4">Mail sent successfully</h3>
                            </div>
                            <div class="login-body">
                                <form method="post">
                                    @csrf
                                    <div>
                                        <p style="font-size: 13px; line-height: 20px">
                                            Check your email for a link to reset your password. If it doesn’t appear
                                            within a few minutes, check your spam folder.
                                            <a href="http://fb.com/Hieu.iceTea" target="_blank">
                                                Learn more.
                                            </a>
                                        </p>
                                    </div>
                                    <div class="submit-form w-100 mt-3 text-center container-login100-form-btn">
                                        <a href="member/login" class="btn mt-3 w-100" style="font-weight: 400">
                                            <i class="fa fa-angle-left mr-1"
                                               style="position: relative; top: 0px; font-size: 120%"></i>
                                            Return to sign in
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(isset($step) && $step == 'change_password')
        <div class="login_main" style="">
            <div class="container">
                <div class=" row">
                    <div id="main" style="height: 450px">
                        <div class="login">
                            {{--<div class="logo">
                                <div class="media-body">
                                    <h5>ARS.CODEDY</h5> <span>airline</span>
                                </div>
                            </div>--}}
                            <div class="title">
                                <h3 class="mb-4">Change your password</h3>
                                <h4>
                                    Change password for {{ '@' . $user->user_name }}
                                </h4>
                            </div>
                            <div class="login-body">
                                <form method="post" onsubmit="preloaderActive(9999)">
                                    @csrf
                                    <input type="hidden" id="action" name="action" value="change_password">
                                    <div>
                                        <input type="password" id="password" name="password" class="mb-3"
                                               placeholder="Enter your new password" autocomplete="off"
                                               value="{{ old('password') }}" required>
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                               class="mb-4" placeholder="Confirm password" autocomplete="off"
                                               value="{{ old('password_confirmation') }}" required>
                                        <p style="font-size: 13px; line-height: 20px">
                                            Make sure it's at least 6 characters including a number and a uppercase a
                                            lowercase letter and a special character.
                                            <a href="http://fb.com/Hieu.iceTea" target="_blank">
                                                Learn more.
                                            </a>
                                        </p>
                                    </div>
                                    <div class="submit-form w-100 mt-3 text-center container-login100-form-btn">
                                        <button type="submit" class="btn mt-3 w-100" style="font-weight: 400">
                                            Change password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('script')
    <script type="text/javascript" src="js/destinations.js"></script>
@endsection

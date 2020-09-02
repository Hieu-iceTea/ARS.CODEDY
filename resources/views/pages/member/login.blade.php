@extends('pages.layout.master')

@section('title', 'Login')

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
             style="background-image:url({{ asset('img/destinations.jpg') }})"></div>
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

    <!-- Schedule index -->
    <div class="login_main " style="">
        <div class="container">
            <div class=" row">
                <div id="main">
                    <div class="login">
                        <div class="logo">
                            <div class="media-body">
                                <h5>ARS.CODEDY</h5> <span>airline</span>
                            </div>
                        </div>
                        <div class="title">
                            <h4> Welcome to ars.codedy airline</h4>
                        </div>
                        <div class="login-body">
                            <form method="post">
                                @csrf
                                <div class="">
                                    <input type="text" name="user_name" placeholder="Username"
                                           value="{{ old('user_name') }}">
                                </div>
                                <div class="mt-1">
                                    <input type="password" name="password" placeholder="Password"
                                           value="{{ old('password') }}">
                                </div>
                                <div class="check d-flex">
                                    <div class="custom-control mr-4 custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="remember"
                                               value="remember"
                                               id="defaultChecked2" {{ old('remember') == 'remember' ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="defaultChecked2">
                                            Remember me
                                        </label>
                                    </div>
                                    <div>
                                        <a href="member/reset-password" class="text-right" style="margin-left: 7.42rem">
                                            Reset Password
                                        </a>
                                    </div>
                                </div>
                                <div class="submit-form w-100 mt-3 text-center container-login100-form-btn">
                                    <button type="submit" class="btn mt-3">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="js/destinations.js"></script>
@endsection

@extends('pages.layout.master')

@section('title', 'Schedule')

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
                            {{--<div class="home_title "><h2>Flight Schedule</h2></div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Search -->

    <!-- Schedule index -->
    <div class="register_main">
        <div class="container">
            <div class="register">
                <div class="title">
                    <h4 style="">Are you ready to join the ARS Club program? Come on, let's get
                        started!</h4>
                    <p>We need some details about you to create a membership account</p>
                </div>
                <form method="post">
                    @csrf
                    <div class="user">
                        <label for="username">
                            <input type="text" name="user_name" id="username" placeholder="Username"
                                   value="{{ old('user_name') }}">
                        </label>
                    </div>

                    <div class="pass">
                        <label for="password">
                            <input type="password" name="password" id="password" placeholder="Password"
                                   value="{{ old('password') }}">
                        </label>
                    </div>

                    <div class="name">
                        <label for="firstlabel">
                            <input type="text" id="firstlabel" name="first_name"
                                   placeholder="First Name" value="{{ old('first_name') }}">
                        </label>
                        <label for="lastlabel">
                            <input type="text" class="lastlabel" name="last_name"
                                   placeholder="Last Name" value="{{ old('last_name') }}">
                        </label>
                    </div>

                    <div class="gender">
                        <input type="radio" id="male" name="gender"
                               value="1" {{ old('gender') == 1 ? 'checked' : '' }}>
                        <label for="male" class="mr-3">Male</label>

                        <input type="radio" id="female" name="gender"
                               value="2" {{ old('gender') == 2 ? 'checked' : '' }}>
                        <label for="female">Female</label><br>
                    </div>

                    <div class="dob">
                        <label for="dateofbirth">
                            <input type="date" name="dob" id="dateofbirth" placeholder="DD/MM/YYYY"
                                   value="{{ old('dob') }}">
                        </label>
                    </div>


                    <div class="email">
                        <label for="email">
                            <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                        </label>
                    </div>

                    <div class="address">
                        <label for="address">
                            <input type="text" name="address" id="address" placeholder="Address"
                                   value="{{ old('address') }}">
                        </label>
                    </div>

                    <div class="phone">
                        <label for="phone">
                            <input type="tel" name="phone" id="phone" placeholder="Phone" value="{{ old('phone') }}">
                        </label>
                    </div>

                    <div class="check d-flex my-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="accept_terms"
                                   id="accept_terms" {{ old('accept_terms') == 'on' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="accept_terms">
                                accept the terms of use.
                            </label>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button class="btn" type="submit" name="button" onclick="preloaderActive()">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="js/destinations.js"></script>
@endsection

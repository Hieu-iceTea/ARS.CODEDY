
@extends('master')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/destinations.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/destinations_responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/my_styles') }}">
@endsection

<!-- Content Home -->
@section('Content')
    <!-- Home -->

    <div class="home page_ticket">
        <div class="background_image" style="background-image:url({{ asset('/source/images/destinations.jpg') }})"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title mt-5"><h2>Register </h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Search -->
    <div class="mainStep1 " style="">
        <div class=" mt-5 mb-4">
            <div class="container">
                <div class="step1-progress row">
                    <div class="container">
                        <div class="content_main">
                            <div class="card bg-light">
                                <h4>Are you ready to join the ARS Club program? Come on, let's get started!</h4>
                                <p>We need some details about you to create a membership account</p>
                                <form action="Register.php" method="post">
                                    <h4 class="name">Username</h4>
                                    <input type="text" class="user" name="username" placeholder="Username"><br>

                                    <h4 class="name">Password</h4>
                                    <input type="password" class="pw" name="password" placeholder="Password"><br>

                                    <div id="name">
                                        <h4 class="name">Name</h4>
                                        <input type="text" class="firstlabel" name="first_name" placeholder="First Name"><input type="text" class="lastlabel" name="last_name" placeholder="Last Name"><br>
                                    </div>

                                    <h4 class="name">Gender</h4>
                                    <div class="gender">
                                        <input type="radio" class="male" name="gender" value="male" checked> Male
                                        <input type="radio" class="female" name="gender" value="female"> Female
                                    </div>

                                    <h4 class="name">Date of Birth</h4>
                                    <input type="date" class="date" name="dateofbirth" placeholder="DD/MM/YYYY">

                                    <h4 class="name">Email</h4>
                                    <input type="email" class="email" name="email" placeholder="Email">

                                    <h4 class="name">Address</h4>
                                    <input type="text" class="address" name="addresss" placeholder="Address">

                                    <h4 class="name">Phone</h4>
                                    <input type="tel" class="phone" name="phone" placeholder="Phone">

                                    <div class="form-group">
                                        <button class="btn" name="button">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/destinations.js') }}"></script>
@endsection

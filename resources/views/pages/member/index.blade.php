@extends('pages.layout.master')

@section('title', 'Member')

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
             style="background-image:url(img/why.jpg)"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            {{--<div class="home_title"><h2>Manage your account</h2></div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Search -->
    <div class="container content">
        <div class="row shadow-lg">
            {{--Aside menu--}}
            @include('pages.member.component.aside_menu')

            {{--Body--}}
            <div class="col-9 px-4 py-4" style="background-color: white">
                <div class="row mb-2">
                    <div class="col-12">
                        <h3>My Profile</h3>
                    </div>
                </div>

                <hr>

                <div class="row mt-3 mb-2">
                    <div class="col-12">
                        <h4>Personal information</h4>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-3">
                        <p>User Name</p>
                    </div>
                    <div class="col-9">
                        <p><b>{{ Auth::user()->user_name }}</b></p>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-3">
                        <p>Name</p>
                    </div>
                    <div class="col-9">
                        <p><b>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</b></p>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-3">
                        <p>Gender</p>
                    </div>
                    <div class="col-3">
                        <p><b>{{ \App\Utilities\Utility::$gender[Auth::user()->gender] }}</b></p>
                    </div>

                    <div class="col-3">
                        <p>Date of birth</p>
                    </div>
                    <div class="col-3">
                        <p><b>{{ date('d/m/Y', strtotime(Auth::user()->dob)) }}</b></p>
                    </div>
                </div>

                <hr>

                <div class="row mt-4 mb-2">
                    <div class="col-12">
                        <h4>Contact details</h4>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-3">
                        <p>Email</p>
                    </div>
                    <div class="col-9">
                        <p>
                            <b>{{ Auth::user()->email }}</b>
                            @if(!Auth::user()->active)
                                (<a href="member/verify">Email verification</a>)
                            @endif
                        </p>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-3">
                        <p>Phone</p>
                    </div>
                    <div class="col-9">
                        <p><b>{{ Auth::user()->phone }}</b></p>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-3">
                        <p>Address</p>
                    </div>
                    <div class="col-9">
                        <p><b>{{ Auth::user()->address }}</b></p>
                    </div>
                </div>

                <hr>

                <div class="row mb-2">
                    <div class="col-3">
                        <p>Created At</p>
                    </div>
                    <div class="col-9">
                        <p><b>{{ date('d/m/Y H:i', strtotime(Auth::user()->created_at)) }}</b></p>
                    </div>
                </div>

                <div class="row mt-0 mb-1">
                    <div class="col-3">
                        <p>Last Updated At</p>
                    </div>
                    <div class="col-9">
                        @if(Auth::user()->updated_at != null)
                            <p><b>{{ date('d/m/Y H:i', strtotime(Auth::user()->updated_at)) }}</b></p>
                        @else
                            <p><b>Not updated yet</b></p>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="js/destinations.js"></script>
@endsection

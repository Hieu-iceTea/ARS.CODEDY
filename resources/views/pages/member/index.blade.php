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
             style="background-image:url(img/destinations.jpg)"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            {{--                            <div class="home_title"><h2>Manage your account</h2></div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Search -->
    <div class="container content">
        <div class="row">
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
                        <p><b>Hieu iceTea</b></p>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-3">
                        <p>Name</p>
                    </div>
                    <div class="col-9">
                        <p><b>Nguyen Dinh Hieu</b></p>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-3">
                        <p>Gender</p>
                    </div>
                    <div class="col-3">
                        <p><b>Male</b></p>
                    </div>

                    <div class="col-3">
                        <p>Date of birth</p>
                    </div>
                    <div class="col-3">
                        <p><b>08/08/1996</b></p>
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
                            <b>DinhHieu8896@gmail.com</b>
                            (<a href="">Email verification</a>)
                        </p>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-3">
                        <p>Phone</p>
                    </div>
                    <div class="col-9">
                        <p><b>0868663315</b></p>
                    </div>
                </div>

                <hr>

                <div class="row mb-2">
                    <div class="col-3">
                        <p>Created At</p>
                    </div>
                    <div class="col-9">
                        <p><b>08/08/2020</b></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="js/destinations.js"></script>
@endsection

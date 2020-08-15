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
                        <h3>Verify Email</h3>
                    </div>
                </div>

                <hr>

                <div class="row mt-4 mb-2">
                    <div class="col-12">
                        <h4>We have sent you an email containing your verification code.
                            <br>
                            Please check your email and enter the verification code here to activate your account.
                        </h4>
                    </div>
                </div>

                <form>
                    <div class="row my-5 justify-content-center">
                        <div class="col-6">
                            <p><input class="form-control" type="text" name="verification_code" required
                                      placeholder="Verification code"></p>
                        </div>
                        <div class="col-3">
                            <p><input class="form-control btn btn-sm btn-outline-primary" type="submit" value="Check">
                            </p>
                        </div>
                    </div>
                </form>

                <hr>

                <div class="row mt-3">
                    <div class="col-3">
                        <p>Created At</p>
                    </div>
                    <div class="col-9">
                        <p><b>{{ date('d/m/Y H:i', strtotime(Auth::user()->created_at)) }}</b></p>
                    </div>
                </div>

                <div class="row mt-0">
                    <div class="col-3">
                        <p>Last Updated At</p>
                    </div>
                    <div class="col-9">
                        <p><b>{{ date('d/m/Y H:i', strtotime(Auth::user()->updated_at)) }}</b></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="js/destinations.js"></script>
@endsection

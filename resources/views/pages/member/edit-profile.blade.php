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
                <form method="post">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-12">
                            <h3>Edit Profile</h3>
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
                            <p>First Name</p>
                        </div>
                        <div class="col-3">
                            <p><input class="form-control form-control-sm" type="text" name="first_name"
                                      placeholder="First Name" value="{{ Auth::user()->first_name }}"></p>
                        </div>
                        <div class="col-3">
                            <p>Last Name</p>
                        </div>
                        <div class="col-3">
                            <p><input class="form-control form-control-sm" type="text" name="last_name"
                                      placeholder="Last Name" value="{{ Auth::user()->last_name }}"></p>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-3">
                            <p>Gender</p>
                        </div>
                        <div class="col-3">
                            <p>
                                <select class="form-control form-control-sm" name="gender">
                                    <option selected>-- Gender --</option>
                                    <option {{ Auth::user()->gender == 1 ? 'selected' : '' }} value="1">Male</option>
                                    <option {{ Auth::user()->gender == 2 ? 'selected' : '' }} value="2">Female</option>
                                </select>
                            </p>
                        </div>

                        <div class="col-3">
                            <p>Date of birth</p>
                        </div>
                        <div class="col-3">
                            <p><input class="form-control form-control-sm" type="date" name="dob" placeholder="DOB"
                                      value="{{ Auth::user()->dob }}"></p>
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
                                <input class="form-control form-control-sm" type="email" name="email"
                                       placeholder="Email" value="{{ Auth::user()->email }}">
                            </p>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-3">
                            <p>Phone</p>
                        </div>
                        <div class="col-9">
                            <p><input class="form-control form-control-sm" type="tel" name="phone" placeholder="Phone"
                                      value="{{ Auth::user()->phone }}">
                            </p>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-3">
                            <p>Address</p>
                        </div>
                        <div class="col-9">
                            <p><input class="form-control form-control-sm" type="tel" name="address" placeholder="Address"
                                      value="{{ Auth::user()->address }}">
                            </p>
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

                    <div class="row mt-0">
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

                    <div class="row mb-2 mt-3">
                        <div class="col-12">
                            <p><input class="form-control form-control-sm btn btn-sm btn-outline-primary" type="submit">
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="js/destinations.js"></script>
@endsection

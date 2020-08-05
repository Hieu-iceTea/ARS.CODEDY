@extends('master')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/destinations.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/destinations_responsive.css') }}">
@endsection

<!-- Content Home -->
@section('Content')
    <!-- Home -->

    <div class="home home_booking">
        <div class="background_image"
             style="background-image:url({{ asset('/source/images/destinations.jpg') }})"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title mt-5"><h2>Get your flight</h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Body -->
    <div class="body_booking container-fluid">
        <div class="container">
            <!-- Flight booking process -->
            <div class="row flight_progress_row">
                <div class="col-3 col-sm-3">
                    <div class="flightProgress">
                        <div class="step_number">1</div>
                        <div class="step_description">Flights</div>
                    </div>
                </div>
                <div class="col-3 col-sm-3">
                    <div class="flightProgress active">
                        <div class="step_number">2</div>
                        <div class="step_description">Passenger details</div>
                    </div>
                </div>
                <div class="col-3 col-sm-3">
                    <div class="flightProgress">
                        <div class="step_number">3</div>
                        <div class="step_description">Extras</div>
                    </div>
                </div>
                <div class="col-3 col-sm-3">
                    <div class="flightProgress">
                        <div class="step_number">4</div>
                        <div class="step_description">Payment</div>
                    </div>
                </div>
            </div>

            <form action="3" method="get">
                <div class="row mt-5">
                    {{-- form main --}}
                    <div class="col-lg-9 col-sm-12">
                        <div class="row mb-4 booking2_color_logo">
                            <div class="media">
                                <i class="fa fa-users" aria-hidden="true" style="font-size: 380%"></i>
                                <div class="media-body ml-4">
                                    <h4 class="mt-0">Who will fly</h4>
                                    <h5>Your passenger data</h5>
                                </div>
                            </div>
                        </div>

                        <div style="display: none" class="row mb-5 booking2_color_logo">
                            <div class="card w-100">
                                <div class="row">
                                    <div class="col-6 my-4 ml-5">
                                        <div class="media">
                                            <i class="fa fa-address-book" aria-hidden="true"
                                               style="font-size: 400%"></i>
                                            <div class="media-body ml-4">
                                                <h5 class="mt-2">Đăng nhập và đặt chỗ nhanh hơn</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 ml-3">
                                        <div class="form-check">
                                            <input class="form-check-input mt-4" type="radio" name="checklogin"
                                                   value="1" id="defaultCheck1" style="width: 20px;height: 20px">
                                            <label class="form-check-label mt-3 ml-2" for="defaultCheck1"
                                                   style="font-size: 90%">
                                                Tôi muốn đăng nhập bằng tài khoản của Bamboo
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input mt-3" type="radio" name="checklogin"
                                                   value="2" id="defaultCheck1" style="width: 20px;height: 20px">
                                            <label class="form-check-label mt-3 ml-2" for="defaultCheck1"
                                                   style="font-size: 90%">
                                                Tiếp tục mà không cần đăng nhập
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--Hành khách--}}
                        <div class="row mb-4">
                            <div class="card w-100">
                                <h5 class="card-header title_card">Passenger <span>(adults)</span></h5>
                                <input type="hidden" name="passenger_type_1" value="">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div>Gender *</div>
                                            <div class="input-group">
                                                <select name="gender_1" class="custom-select"
                                                        aria-label="select with button addon">
                                                    <option value="" selected>-- Gender --</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div>Middle and First/Given name *</div>
                                            <div class="input-group">
                                                <input name="firstname_1" type="text" class="form-control"
                                                       placeholder="Middle and First/Given name"
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div>Last/Family Name *</div>
                                            <div class="input-group">
                                                <input name="lastname_1" type="text" class="form-control" placeholder="Last/Family Name"
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ml-3" style="font-size: 80%">
                                            Please enter your full name as it appears on your passport.
                                        </p>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div>Date of birth *</div>
                                            <div class="input-group">
                                                <input name="dob_1" type="date" class="form-control w-75" placeholder="Departure">
                                            </div>
                                        </div>
                                        <div class="col-8" style="display: none">
                                            <div>Come with the passengers</div>
                                            <div class="input-group">
                                                <input name="with_passenger_1" type="text" class="form-control" placeholder=""
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ml-1 booking2_color_logo">
                                <p>* required fields</p>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="card w-100">
                                <h5 class="card-header title_card">Passenger <span>(children)</span></h5>
                                <input type="hidden" name="passenger_type_1" value="">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div>Gender *</div>
                                            <div class="input-group">
                                                <select name="gender_1" class="custom-select"
                                                        aria-label="select with button addon">
                                                    <option value="" selected>-- Gender --</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div>Middle and First/Given name *</div>
                                            <div class="input-group">
                                                <input name="firstname_1" type="text" class="form-control"
                                                       placeholder="Middle and First/Given name"
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div>Last/Family Name *</div>
                                            <div class="input-group">
                                                <input name="lastname_1" type="text" class="form-control" placeholder="Last/Family Name"
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ml-3" style="font-size: 80%">
                                            Please enter your full name as it appears on your passport.
                                        </p>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div>Date of birth *</div>
                                            <div class="input-group">
                                                <input name="dob_1" type="date" class="form-control w-75" placeholder="Departure">
                                            </div>
                                        </div>
                                        <div class="col-8" style="display: none">
                                            <div>Come with the passengers</div>
                                            <div class="input-group">
                                                <input name="with_passenger_1" type="text" class="form-control" placeholder=""
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ml-1 booking2_color_logo">
                                <p>* required fields</p>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="card w-100">
                                <h5 class="card-header title_card">Passenger <span>(Infant)</span></h5>
                                <input type="hidden" name="passenger_type_1" value="">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div>Gender *</div>
                                            <div class="input-group">
                                                <select name="gender_1" class="custom-select"
                                                        aria-label="select with button addon">
                                                    <option value="" selected>-- Gender --</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div>Middle and First/Given name *</div>
                                            <div class="input-group">
                                                <input name="firstname_1" type="text" class="form-control"
                                                       placeholder="Middle and First/Given name"
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div>Last/Family Name *</div>
                                            <div class="input-group">
                                                <input name="lastname_1" type="text" class="form-control" placeholder="Last/Family Name"
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ml-3" style="font-size: 80%">
                                            Please enter your full name as it appears on your passport.
                                        </p>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div>Date of birth *</div>
                                            <div class="input-group">
                                                <input name="dob_1" type="date" class="form-control w-75" placeholder="Departure">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div>Come with the passengers</div>
                                            <div class="input-group">
                                                <input name="with_passenger_1" type="text" class="form-control" placeholder=""
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ml-1 booking2_color_logo">
                                <p>* required fields</p>
                            </div>
                        </div>
                        {{--end - Hành khách--}}

                        {{-- Thông tin liên hệ --}}
                        <div class="row my-4 booking2_color_logo">
                            <div class="media">
                                <i class="fa fa-users" aria-hidden="true" style="font-size: 400%"></i>
                                <div class="media-body ml-4">
                                    <h4 class="mt-0">Who is booking</h4>
                                    <h5>Your contact information</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card w-100">
                                <h5 class="card-header title_card ">Contact data</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div>Gender *</div>
                                            <div class="input-group">
                                                <select name="contact_gender" class="custom-select" id="inputGroupSelect04"
                                                        aria-label="Example select with button addon">
                                                    <option value="" selected>Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div>Middle and First/Given name *</div>
                                            <div class="input-group">

                                                <input name="contact_firstname" type="text" class="form-control"
                                                       placeholder="Middle and First/Given name"
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div>Last/Family Name *</div>
                                            <div class="input-group">

                                                <input name="contact_lastname" type="text" class="form-control" placeholder="Last/Family Name"
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ml-3" style="font-size: 80%">Please enter your full name as it appears
                                            on your passport.</p>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div>Email*</div>
                                            <div class="input-group mb-3 width_input_prepend">

                                                <input name="contact_email" type="text" class="form-control" placeholder="Email"
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div>Phone *</div>
                                            <div class="input-group mb-3 width_input_prepend">

                                                <input name="contact_phone" type="text" class="form-control" placeholder="Phone"
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-8">
                                            <p style="font-size: 80%">Note: We will contact you under the phone number
                                                stated above in case of flight irregularities or rebookings.</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <div>Address *</div>
                                            <div class="input-group">
                                                <input name="contact_address" type="text" class="form-control" placeholder="Address "
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mb-2">
                                        <div class="col-12">
                                            <p style="font-size: 80%">(1) I hereby accept to get notifications via
                                                email: Please see our Customer privacy policy , Conditions for online
                                                booking and Conditions of website use for information regarding the
                                                processing of your personal data by Bamboo Airways.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end - Thông tin liên hệ --}}
                    </div>

                    {{-- cart_info bên phải --}}
                    <div class="col-lg-3">
                        <div class="card cart-info  w-100" style="width: 18rem;">
                            <img class="card-img-top" src="../source/images/destination_5.jpg" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4>
                                    <span>Hồ Chí Minh</span>
                                    (SGN) tới
                                    <span>Hà Nội</span>
                                    (HAN)
                                </h4>
                                <p class="card-text">Khứ Hồi | 1 Người Lớn</p>
                                <p class="card-text-link"><a href="" style="text-decoration: none">Thay đổi lịch
                                        trình chuyến bay</a></p>
                            </div>
                        </div>
                        <div class="card-Clearfix card mt-3  w-100" style="width: 18rem;">
                            <div class="card-body text-center">
                                <h5 class="card-title"><span
                                        style="font-size: 20px;color: #33597C;font-weight: 600">Tổng Tiền</span> :
                                    3000.000.000 vnđ</h5>
                                <h6 class="card-subtitle mb-2 text-muted"></h6>
                                <p class="card-text">Bao gồm tuế và phí dịch vụ</p>

                            </div>
                        </div>
                        <div class="card mt-3 cart-content w-100" style="width: 18rem;">
                            <div class="card-body text-center">
                                <h5 class="card-title" style=""><span
                                        style="font-size: 20px;color: #33597C;font-weight: 600">Tổng Tiền</span> :
                                    3000.000.000 vnđ</h5>

                                <h6 class="card-subtitle mb-2 text-muted"></h6>
                                <h4 style="">
                                    <span style="font-family: 'Oswald', sans-serif;font-weight: bold"></span>
                                    (SGN) tới
                                    <span style="font-family: 'Oswald', sans-serif;font-weight: bold"></span>
                                    (HAN)
                                </h4>
                                <p class="card-text">CN 02/08/2020 | 19:25 - 20:30</p>
                                <p class="card-text">Người lớn 1 * 2.500.000 = <span>2.500.000</span></p>
                            </div>
                        </div>

                        <button type="submit" class="btn mt-3 w-100 position-sticky continue">Continue
                            <span><i class="fa fa-angle-right"></i></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/destinations.js') }}"></script>
@endsection

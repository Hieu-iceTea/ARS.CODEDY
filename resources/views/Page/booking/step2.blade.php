@extends('master')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/my_styles') }}">
@endsection

<!-- Content Home -->
@section('Content')
    <!-- Home Background Header-->
    <div class="home page_ticket" style="height: 586px">

        <div class="background_image" style="background-image:url(../source/images/destinations.jpg)"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title"><h2>Customer information </h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="mainStep1 " style="">
        <div class=" mt-5 mb-4">
            <div class="container">
                <div class="step1-progress row">
                    <div class="col-sm-3  ">
                        <p>
                            <span class="badge badge-light">1</span> Flight
                        </p>
                    </div>
                    <div class="col-sm-3 active">
                        <p>
                            <span class="badge badge-light" >2</span>Customer information
                        </p>
                    </div>
                    <div class="col-sm-3 ">
                        <p>
                            <span class="badge badge-light">3</span>Bonus services
                        </p>
                    </div>
                    <div class="col-sm-3 ">
                        <p>
                            <span class="badge badge-light">4</span> Pay
                        </p>
                    </div>
                </div>
                <div class=" row mt-5">
                    <div class="col-lg-8 ">
                        <div class="row">

                            <div class="container mb-3">
                                <div class="row">
                                    <div class="col-lg-3" style="font-size: 400%;margin-top: -30px" >
                                        <i class="fa fa-users color_title_booking2" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-lg-4 booking2_who">
                                        <p class="color_title_booking2 booking2_font_family" style="font-size: 150%;margin-top: -10px"><strong>Who will fly</strong></p>
                                        <p class="color_title_booking2 booking2_font_family" style="font-size: 150%;margin-top: -20px">Your passenger data</p>
                                    </div>
                                </div>
                            </div>

                            {{--                                đăng nhập và đặt chỗ nhanh hơn--}}
                            <div class="card width_card mb-5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-2  color_title_booking2">
                                            <i class="fa fa-address-book" aria-hidden="true" style="font-size: 400%;margin: 30px 20px 20px 20px"></i>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="mt-4 color_title_booking2 booking2_login">Sign in and make a reservation faster</p>
                                        </div>
                                        <div style="margin:30px 0px 0px -73px"><input type="radio" name="checkbox" value="checkbox1" class="size_checkbox"></div>
                                        <p style="margin:-78px 10px 0px 440px" class="booking2_font_family color_title_booking2">Tôi muốn đăng nhập bằng tài khoản của
                                            Bamboo</p>

                                        <div style="margin: -25px 0px 0px -310px"><input type="radio" name="checkbox" value="checkbox2" class="size_checkbox"></div>
                                        <p style="margin:-30px 0px 20px 440px" class="booking2_font_family color_title_booking2">Tiếp tục mà không cần đăng nhập</p>
                                    </div>
                                </div>
                            </div>

                            {{--                                Khách hàng--}}
                            <div class="card width_card booking2_font_family">
                                <div class="bg-title">
                                    <p class="title ml-3 my-1" style="font-size: 120%"><strong>Passenger</strong></p>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="m-lg-3">
                                            <div>Danh xưng*</div>
                                            <div class="input-group width_input_opption">
                                                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                    <option selected>Danh xưng</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="m-lg-3">
                                            <div>First Name*</div>
                                            <div class="input-group mb-3 width_input_content">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input type="text" class="form-control" placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="m-lg-3">
                                            <div>Last Name*</div>
                                            <div class="input-group mb-3 width_input_content">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input type="text" class="form-control" placeholder="Last Name" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <p class="ml-3 margin_content_notification" style="font-size: 80%">Please enter your full name according to your ID</p>
                                    </div>
                                </div>
                                <div class="container margin_top_container">
                                    <div class="row">
                                        <div class="m-lg-3">
                                            <div>Date of birth</div>
                                            <div class="input-group mb-3 width_input_opption">
                                                <div class="input-group-prepend">
                                                </div>
{{--                                                <input type="text" class="form-control" placeholder="dd/mm/yyyy" aria-label="Username" aria-describedby="basic-addon1">--}}
                                                <input type="date" class="form-control" id="departure"
                                                       name="departure" placeholder="Departure" required>
                                            </div>
                                        </div>
                                        <div class="m-lg-3">
                                            <div>Country*</div>
                                            <div class="input-group width_input_content">
                                                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                    <option selected>Viet Nam</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-top: -40px">
                                    <div class="m-lg-3" >
                                        <div>Membership</div>
                                        <div class="input-group mb-3 width_card_w100">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="booking2_font_family color_title_booking2" style="margin-left: 640px">Required field*</p>

                            <div class="container my-3">
                                <div class="row">
                                    <div class="col-lg-3" style="font-size: 400%;margin-top: -30px" >
                                        <i class="fa fa-users color_title_booking2" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-lg-4 booking2_who">
                                        <p class="color_title_booking2 booking2_font_family" style="font-size: 150%;margin-top: -10px"><strong>Who will fly</strong></p>
                                        <p class="color_title_booking2 booking2_font_family" style="font-size: 150%;margin-top: -20px">Your passenger data</p>
                                    </div>
                                </div>
                            </div>

                            {{--                                Thông tin liên hệ--}}
                            <div class="card width_card booking2_font_family">
                                <div class="bg-title" style="height: 40px">
                                    <p class="title ml-3 my-1" style="font-size: 120%"><strong>Contact information</strong></p>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="m-lg-3">
                                            <div>Danh xưng*</div>
                                            <div class="input-group width_input_opption">
                                                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                    <option selected>Danh xưng</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="m-lg-3">
                                            <div>First name*</div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input type="text" class="form-control" placeholder="First name" aria-label="Username" aria-describedby="basic-addon1" style="width: 220px">
                                            </div>
                                        </div>
                                        <div class="m-lg-3">
                                            <div>Last Name*</div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input type="text" class="form-control" placeholder="Last Name" aria-label="Username" aria-describedby="basic-addon1" style="width: 220px">
                                            </div>
                                        </div>
                                        <p class="ml-3 margin_content_notification" style="font-size: 80%">Please enter your full name according to your ID</p>
                                        <div class="container margin_top_container">
                                            <div class="row">
                                                <div class="m-lg-3">
                                                    <div>Email*</div>
                                                    <div class="input-group mb-3 width_input_prepend">
                                                        <div class="input-group-prepend">
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" >
                                                    </div>
                                                </div>
                                                <input type="radio" name="checkboxx" value="checkbox3" class="mt-5 size_checkbox"><p class=" ml-2" >
                                                <p style="font-size: 80%;margin-top: 35px">Đăng ký để cập nhập thông tin mới nhất từ hãng và<br> các chương trình khuyến mại</p>
                                            </div>
                                        </div>
                                        <div class="container margin_content_notification">
                                            <div class="row">
                                                <div class="m-lg-3">
                                                    <div>Số điện thoại*</div>
                                                    <div class="input-group width_input_opption">
                                                        <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                            <option selected>+84 (Viet Nam)</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="m-lg-3 " >
                                                    <div class="input-group mb-3 width_input_opption">
                                                        <div class="input-group-prepend">
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Số điện thoại" aria-label="Username" aria-describedby="basic-addon1" style="margin-top: 21px">
                                                    </div>
                                                </div>
                                                <input type="radio" name="checkboxx" value="checkbox4" class="mt-5 size_checkbox" ><p class=" ml-2 content_promotion">Đăng ký để nhận tin tức về các ưu đãi, khuyến mại<br>
                                                    mới nhất từ Bamboo Airways</p>

                                                <p class="ml-3 mb-3 note_information">Lưu ý: Quý khách vui lòng cung cấp thông tin chính xác, Bamboo Airways sẽ<br> sử dụng để liên lạc và hỗ trợ Quý khách trong trường hợp cần thiết.</p>

                                                <div class="container margin_top_container">
                                                    <div class="row">
                                                        <div class="m-lg-3">
                                                            <div>Street*</div>
                                                            <div class="input-group mb-3 width_input_prepend">
                                                                <div class="input-group-prepend">
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Street" aria-label="Username" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container margin_top_container">
                                                    <div class="row">
                                                        <div class="m-lg-3">
                                                            <div>City*</div>
                                                            <div class="input-group mb-3 width_input-group">
                                                                <div class="input-group-prepend">
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="City" aria-label="Username" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                        <div class="m-lg-3">
                                                            <div>Country*</div>
                                                            <div class="input-group width_input-group">
                                                                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                                    <option selected>Việt Nam</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <p class="ml-3 note_information">(1)I agree to receive notification emails. For more information regarding Bamboo Airways 'processing of customers' personal information, please see details at
                                                            Privacy policy, Conditions of using online booking function and Website terms of use
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class=" col-lg-4 " >
                        <div class="card cart-info  w-100"  style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('source/images/destination_5.jpg') }}" alt="Card image cap">
                            <div class="card-body text-center" style="position: sticky; top:0;z-index: 10">
                                <h4> <span>Ho Chi Minh</span> (SGN) go <span>Ha Noi </span>(HAN)</h4>
                                <p class="card-text">Round-trip | 1 Adults</p>
                                <p class="card-text-link"><a href="" style="text-decoration: none">Change flight schedules</a></p>
                            </div>
                        </div>
                        <div class="card-Clearfix card mt-3  w-100" style="width: 18rem;">
                            <div class="card-body text-center">
                                <h5 class="card-title" ><span style="font-size: 20px;color: #33597C;font-weight: 600">Total Money</span> : 3000.000.000 vnđ</h5>
                                <h6 class="card-subtitle mb-2 text-muted"></h6>
                                <p class="card-text">Includes minnows and service fees</p>

                            </div>
                        </div>
                        <div class="card mt-3 cart-content w-100" style="width: 18rem;">
                            <div class="card-body text-center">
                                <h5 class="card-title" style=""><span style="font-size: 20px;color: #33597C;font-weight: 600">Total Money</span> : 3000.000.000 vnđ</h5>
                                <h6 class="card-subtitle mb-2 text-muted"></h6>
                                <h4 style=""> <span style="font-family: 'Oswald', sans-serif;font-weight: bold"></span> (SGN) go <span style="font-family: 'Oswald', sans-serif;font-weight: bold"></span>(HAN)</h4>
                                <p class="card-text" >CN 02/08/2020 | 19:25 - 20:30</p>
                                <p class="card-text">Adults 1 * 2.500.000 = <span>2.500.000</span></p>
                            </div>
                        </div>

                        <a type="button"  href="http://ars.codedy/booking/3" class="btn mt-3 w-100 position-sticky contineu">Tiếp Theo  <span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
@endsection

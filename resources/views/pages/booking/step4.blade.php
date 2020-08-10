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
                    <div class="flightProgress">
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
                    <div class="flightProgress active">
                        <div class="step_number">4</div>
                        <div class="step_description">Payment</div>
                    </div>
                </div>
            </div>

            <form action="" method="get">
                <div class="row">
                    {{-- form main --}}
                    <div class="col-lg-9 col w-100">
                        <!-- Review your trip -->
                        <div class="row mt-5 mb-4">
                            <div class="section-header color-blue">
                                <h3>
                                    <i class="fa fa-sun-o"></i>
                                    Review your trip
                                </h3>
                            </div>
                        </div>

                        <div class="fligh-step4 row">

                            <div class="card w-100">
                                <h5 class="card-header title_card">Flight</h5>

                                <div class="card-body">
                                    <h4>Outbound flight: 20/08/2020</h4>
                                    <table class="table table-borderless table-sm w-50 mb-1">
                                        <thead>
                                        <tr>
                                            <th scope="col" style="color: #636466">07:15</th>
                                            <td scope="col">Ha Noi</td>
                                            <td scope="col"></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row" style="color: #636466">09:25</th>
                                            <td>Ho Chi Minh</td>
                                            <td></td>
                                        </tr>
                                        <tr style="color: #00305B">
                                            <th scope="row"></th>
                                            <td>VN-599</td>
                                            <td>Travel time: 02h 10m</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <strong>Selected fare: ARS Plus</strong>
                                </div>
                            </div>
                        </div>

                        <div class="customer-step4 row mt-4 ">
                            <div class="card w-100">
                                <h5 class="card-header title_card">Passenger</h5>
                                <div class="card-body">
                                    <table class="table table-borderless table-sm w-75 mb-1">
                                        <thead>
                                        <tr>
                                            <th scope="col" style="color: #636466">1. Nguyen Dinh Hieu</th>
                                            <td scope="col" style="color: #00305B">Adults</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row" style="color: #636466">2. Pham Minh Anh</th>
                                            <td style="color: #00305B">Adults</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="customer-step4 row mt-4 ">
                            <div class="card w-100">
                                <h5 class="card-header title_card">Extras</h5>
                                <div class="card-body">
                                    <table class="table table-borderless table-sm mb-1">
                                        <thead>
                                        <tr>
                                            <th scope="col" style="color: #636466">1. Luggage</th>
                                            <td scope="col" style="color: #00305B">100.000 VND</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row" style="color: #636466">2. Meal</th>
                                            <td style="color: #00305B">50.000 VND</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Payment details -->
                        <div class="row mt-5 mb-4">
                            <div class="section-header color-blue">
                                <h3>
                                    <i class="fa fa-credit-card"></i>
                                    Payment details
                                </h3>
                            </div>
                        </div>
                        <div class="solutionpayment row  ">
                            <div class=" title card w-100">

                                <h5 class="card-header title_card">Payment methods</h5>
                                <div class="card-body ">
                                    <div class="row">
                                        <p class="ml-3 title">Choose your preferred payment method </p>
                                    </div>

                                    <div class="row">

                                        <!-- Pay Type Item -->
                                        <div class="pay_type_item col-md-4 mt-2 mb-2">
                                            <label for="pay_type_credit_id" style="display: inline; cursor: pointer">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Pay later</h5>
                                                        <input type="radio" name="pay_type" id="pay_type_credit_id"
                                                               value="pay_type_credit_id" required>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="pay_type_item col-md-4 mt-2 mb-2">
                                            <label for="pay_type_credit_id_2" style="display: inline; cursor: pointer">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Credit Card</h5>
                                                        <input type="radio" name="pay_type" id="pay_type_credit_id_2"
                                                               value="pay_type_credit_id_2" required>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="pay_type_item col-md-4 mt-2 mb-2">
                                            <label for="pay_type_credit_id_3" style="display: inline; cursor: pointer">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">VN Pay</h5>
                                                        <input type="radio" name="pay_type" id="pay_type_credit_id_3"
                                                               value="pay_type_credit_id_3" required>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Ticket details -->
                        <div class="row mt-5 mb-4">
                            <div class="section-header color-blue">
                                <h3>
                                    <i class="fa fa-clipboard"></i>
                                    Ticket details
                                </h3>
                            </div>
                        </div>

                        <div class="info-ticker mt-4 row">
                            <div class="card w-100">
                                <h5 class="card-header title_card">Outbound flight: 20/08/2020</h5>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-body">
                                                <table class="table table-borderless table-sm w-50 mb-1">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col" style="color: #636466">07:15</th>
                                                        <td scope="col">Ha Noi</td>
                                                        <td scope="col"></td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row" style="color: #636466">09:25</th>
                                                        <td>Ho Chi Minh</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style="color: #00305B">
                                                        <th scope="row"></th>
                                                        <td>VN-599</td>
                                                        <td>Travel time: 02h 10m</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <div>
                                                    <p class="card-text d-inline">Fare (Adults)</p>
                                                    <p class="card-text d-inline float-right">1 × 599,000 = 599,000
                                                        VND</p>
                                                </div>
                                                <div>
                                                    <p class="card-text d-inline">Airport security</p>
                                                    <p class="card-text d-inline float-right ">20,000 VND</p>
                                                </div>
                                                <div>
                                                    <p class="card-text d-inline">Passenger Service ChargePassenger
                                                        Service Charge</p>
                                                    <p class="card-text d-inline float-right ">100,000 VND</p>
                                                </div>
                                                <div>
                                                    <p class="card-text d-inline">Convenient payment</p>
                                                    <p class="card-text d-inline float-right ">50,000 VND</p>
                                                </div>
                                                <div>
                                                    <p class="card-text d-inline">System and Admin Surcharge</p>
                                                    <p class="card-text d-inline float-right ">320,000 VND</p>
                                                </div>
                                                <div class="mt-2">
                                                    <h4 class="card-text d-inline">Total VAT</h4>
                                                    <h4 class="card-text d-inline float-right ">97,000 VND</h4>
                                                </div>
                                                <div class="mt-2">
                                                    <h4 class="card-text d-inline">Total flight cost</h4>
                                                    <h4 class="card-text d-inline float-right ">1,186,000 VND</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button submit -->
                        <button type="submit" class="btn mt-3 w-100 position-sticky continue">Accept and pay immediately
                            <span><i class="fa fa-angle-right"></i></span>
                        </button>
                    </div>

                    {{-- cart_info bên phải --}}
                    <div class=" col-lg-3 mt-5">
                        <div class="card cart-info  w-100" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('source/images/destination_5.jpg') }}"
                                 alt="Card image cap">
                            <div class="card-body text-center" style="position: sticky; top:0;z-index: 10">
                                <h4><span>Ho Chi Minh</span> (SGN)</h4>
                                <h4>to</h4>
                                <h4><span>Ha Noi </span>(HAN)</h4>
                                <p class="card-text">One-way | 1 Passenger</p>
                            </div>
                        </div>
                        {{--                        <div class="card-Clearfix card mt-3  w-100" style="width: 18rem;">--}}
                        {{--                            <div class="card-body text-center">--}}
                        {{--                                <h5 class="card-title">--}}
                        {{--                                    <span style="font-size: 20px;color: #33597C;font-weight: 600">Total Money--}}
                        {{--                                    </span> :--}}
                        {{--                                    3000.000.000 vnđ--}}
                        {{--                                </h5>--}}
                        {{--                                <h6 class="card-subtitle mb-2 text-muted"></h6>--}}
                        {{--                                <p class="card-text">Includes minnows and service fees</p>--}}

                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="card mt-3 cart-content w-100" style="width: 18rem;">--}}
                        {{--                            <div class="card-body text-center">--}}
                        {{--                                <h5 class="card-title" style="">--}}
                        {{--                                    <span style="font-size: 20px;color: #33597C;font-weight: 600">Total Money</span> :--}}
                        {{--                                    3000.000.000 vnđ</h5>--}}
                        {{--                                <h6 class="card-subtitle mb-2 text-muted"></h6>--}}
                        {{--                                <h4 style=""><span--}}
                        {{--                                        style="font-family: 'Oswald', sans-serif;font-weight: bold"></span> (SGN) go--}}
                        {{--                                    <span style="font-family: 'Oswald', sans-serif;font-weight: bold"></span>(HAN)--}}
                        {{--                                </h4>--}}
                        {{--                                <p class="card-text">CN 02/08/2020 | 19:25 - 20:30</p>--}}
                        {{--                                <p class="card-text">Adults 1 * 2.500.000 = <span>2.500.000</span></p>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        {{--                        <button type="submit" class="btn mt-3 w-100 position-sticky continue">Continue--}}
                        {{--                            <span><i class="fa fa-angle-right"></i></span></button>--}}
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/destinations.js') }}"></script>
@endsection

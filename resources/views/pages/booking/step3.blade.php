@extends('pages.layout.master')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="css/destinations.css">
    <link rel="stylesheet" type="text/css" href="css/destinations_responsive.css">
@endsection

<!-- Content Home -->
@section('Content')
    <!-- Home -->

    <div class="home home_booking">
        <div class="background_image"
             style="background-image:url(img/destinations.jpg)"></div>
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
                    <div class="flightProgress active">
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

            <form action="4" method="get">
                <div class="row">
                    {{-- form main --}}
                    <div class="col-lg-9">
                        <div class="container">
                            <div class="row mt-5">
                                <div class="section-header color-blue">
                                    <h3>
                                        <i class="fa fa-suitcase" aria-hidden="true"></i>
                                        Extra service
                                    </h3>
                                </div>
                            </div>

                            <div class="row mt-5 shadow">
                                <div class="item_extra_service select-wrapper w-100">
                                    <div class="row extra-header-row">
                                        <label for="service_1" class="col-2 col-sm-1 my_label">
                                            <input name="service_1" id="service_1" type="checkbox"
                                                   class="extra-checkbox" data-extras="seats"
                                                   autocomplete>
                                        </label>
                                        <div class="col-10 col-sm-11" style="background-color: white">
                                            <div class="row intro-services">

                                                <div class="col-4 intro">
                                                    <div class="column-inner color-blue">
                                                        <h3><i class="fa fa-star-o" aria-hidden="true"></i></h3>
                                                        <h4></h4>
                                                        <h4>Choose your preferred seat</h4>
                                                    </div>
                                                </div>

                                                <div class="col-4 description">
                                                    <div class="column-inner">
                                                        <ul class="">
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Individual
                                                                    seat selection</p></li>
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Standard
                                                                    seats</p></li>
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Wide
                                                                    leg seat</p></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <img src="img/booking_4_1.jpg"
                                                         class="rounded mx-auto d-block" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5 shadow">
                                <div class="item_extra_service select-wrapper w-100">
                                    <div class="row extra-header-row">
                                        <label for="service_2" class="col-2 col-sm-1 my_label">
                                            <input name="service_2" id="service_2" type="checkbox"
                                                   class="extra-checkbox" data-extras="seats"
                                                   autocomplete>
                                        </label>
                                        <div class="col-11" style="background-color: white">
                                            <div class="row intro-services">
                                                <div class="col-4 intro">
                                                    <div class="column-inner color-blue">
                                                        <h3><i class="fa fa-star-o" aria-hidden="true"></i></h3>
                                                        <h4></h4>
                                                        <h4>Choose your preferred seat</h4>
                                                    </div>
                                                </div>
                                                <div class="col-4 description">
                                                    <div class="column-inner">
                                                        <ul class="">
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Individual
                                                                    seat selection</p></li>
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Standard
                                                                    seats</p></li>
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Wide
                                                                    leg seat</p></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <img src="img/booking_4_2.jpg"
                                                         class="rounded mx-auto d-block" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5 shadow">
                                <div class="item_extra_service select-wrapper w-100">
                                    <div class="row extra-header-row">
                                        <label for="service_3" class="col-2 col-sm-1 my_label">
                                            <input name="service_3" id="service_3" type="checkbox"
                                                   class="extra-checkbox" data-extras="seats"
                                                   autocomplete>
                                        </label>
                                        <div class="col-11" style="background-color: white">
                                            <div class="row intro-services">
                                                <div class="col-4 intro">
                                                    <div class="column-inner color-blue">
                                                        <h3><i class="fa fa-star-o" aria-hidden="true"></i></h3>
                                                        <h4></h4>
                                                        <h4>Choose your preferred seat</h4>
                                                    </div>
                                                </div>
                                                <div class="col-4 description">
                                                    <div class="column-inner">
                                                        <ul class="">
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Individual
                                                                    seat selection</p></li>
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Standard
                                                                    seats</p></li>
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Wide
                                                                    leg seat</p></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <img src="img/booking_4_3.jpg"
                                                         class="rounded mx-auto d-block" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- cart_info bên phải --}}
                    <div class=" col-lg-3 mt-5">
                        <div class="card cart-info  w-100" style="width: 18rem;">
                            <img class="card-img-top" src="img/destination_5.jpg"
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

                        <button type="submit" class="btn mt-3 w-100 position-sticky continue">Continue
                            <span><i class="fa fa-angle-right"></i></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript" src="js/custom.js"></script>
@endsection

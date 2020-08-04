@extends('master')
<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/destinations.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/destinations_responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/my_styles') }}">
@endsection
@section('Content')
    <!-- Home -->

    <div class="home page_ticket">

        <div class="background_image" style="background-image:url({{ asset('/source/images/destinations.jpg') }})"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title mt-5"><h2>Bonus Service </h2></div>
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
                    <div class="col-sm-3  ">
                        <p>
                            <span class="badge badge-light">1</span> Flight
                        </p>
                    </div>
                    <div class="col-sm-3 ">
                        <p>
                            <span class="badge badge-light" >2</span>Customer information
                        </p>
                    </div>
                    <div class="col-sm-3 active">
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
                <form action="2" method="get" name="check" >
                    <div class=" row mt-5">
                        <div class="col-8" style="width-max: 500px;">
                            <div class="container">
                                <div class="row mt-5" >
                                    <div class="section-header color-blue">
                                        <h3>
                                            <i class="fa fa-suitcase" aria-hidden="true"></i>
                                            <span></span>
                                            Additional options
                                        </h3>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="description select-wrapper w-100">
                                        <div class="row extra-header-row">
                                            <div class="col-1 select" style="background-color: #F0F2F5;">
                                                <label for="" class="control checkbox ">
                                                    <input type="checkbox" class="extra-checkbox" data-extras="seats" autocomplete>
                                                    <span class="control-indicator"></span>
                                                </label>
                                            </div>
                                            <div class="col-11" style="background-color: white">
                                                <div class="row">
                                                    <div class="col-4 intro">
                                                        <div class="column-inner color-blue">
                                                            <h3><i class="fa fa-wheelchair" aria-hidden="true"></i></h3>
                                                            <h4></h4>
                                                            <h4>Choose your preferred seat</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 list">
                                                        <div class="column-inner">
                                                            <ul class="">
                                                                <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Individual seat selection</p></li>
                                                                <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Standard seats</p></li>
                                                                <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Wide leg seat</p></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="https://www.bambooairways.com/reservation/common/framework/en_US/public/img/extras-seats.jpg" class="rounded mx-auto d-block" width="220px" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="description select-wrapper w-100">
                                        <div class="row extra-header-row">
                                            <div class="col-1 select" style="background-color: #F0F2F5;">
                                                <label for="" class="control checkbox ">
                                                    <input type="checkbox" class="extra-checkbox" data-extras="seats" autocomplete>
                                                    <span class="control-indicator"></span>
                                                </label>
                                            </div>
                                            <div class="col-11" style="background-color: white">
                                                <div class="row">
                                                    <div class="col-4 intro">
                                                        <div class="column-inner color-blue">
                                                            <h3><i class="fa fa-id-card" aria-hidden="true"></i>
                                                            </h3>
                                                            <h4></h4>
                                                            <h4>Preferred procedures</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 list">
                                                        <div class="column-inner">
                                                            <ul class="">
                                                                <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span> Time saving</p></li>
                                                                <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Used priority counters</p></li>
                                                                <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Use priority walkways at the departure gate</p></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="https://www.bambooairways.com/reservation/common/framework/en_US/public/img/extras-luggage.jpg" alt="" width="220px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="description select-wrapper w-100">
                                        <div class="row extra-header-row">
                                            <div class="col-1 select" style="background-color: #F0F2F5;">
                                                <label for="" class="control checkbox ">
                                                    <input type="checkbox" class="extra-checkbox" data-extras="seats" autocomplete>
                                                    <span class="control-indicator"></span>
                                                </label>
                                            </div>
                                            <div class="col-11" style="background-color: white">
                                                <div class="row">
                                                    <div class="col-4 intro">
                                                        <div class="column-inner color-blue">
                                                            <h3><i class="fa fa-diamond" aria-hidden="true"></i>
                                                            </h3>
                                                            <h4></h4>
                                                            <h4>Use the business lounge</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 list">
                                                        <div class="column-inner">
                                                            <ul class="">
                                                                <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Affirmation class</p></li>
                                                                <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Enjoy the private space</p></li>
                                                                <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Experience luxury service</p></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="https://www.bambooairways.com/reservation/common/framework/en_US/public/img/Priority-check-in.jpg" alt="" width="220px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-4" >
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

                            <button type="submit"  href="" class="btn mt-3 w-100 position-sticky contineu">Continew  <span><i class="fa fa-angle-right"></i></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
@endsection

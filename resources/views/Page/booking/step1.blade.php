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
                            <div class="home_title mt-5"><h2>Flight list </h2></div>
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
                    <div class="col-sm-3 active ">
                        <p>
                            <span class="badge badge-light">1</span> Flight
                        </p>
                    </div>
                    <div class="col-sm-3 ">
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
                <form action="2" method="get" name="check" >
                <div class=" row mt-5">

                    <div class="col-lg-8 col-sm-12">
                        <div class="locale-vi row">
                            <div class="media">
                                <img class="mr-3"  class ="logo"src="{{ asset('source/images/iconfight.png') }}" style="width: 40px;height: 40px" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0"  style="">Trip
                                    </h5>
                                    <h4> <span>Ho Chi Minh</span> (SGN) go <span>Ha Noi </span>(HAN)</h4>
                                </div>
                            </div>
                        </div>
                        <div class="Active-date row">
                            <div class="col" style="">
                                <p>  Thursday, July 30, 2020</p>
                            </div>
                        </div>
                        <div class="title row mt-4">
                            <div class="col-3"></div>
                            <div class="col-3 eco" >Bamboo Eco</div>
                            <div class="col-3 plus">Bamboo Plus</div>
                            <div class="col-3 business">Bamboo Business</div>
                        </div>
                        <div class="content-step1 row mt-3" style="">
                                <div class="col-3">
                                <ul  class="date-fly w-100">
                                    <li class="mr-3 w-25">
                                        <ul class="text-center">
                                            <li>19:25</li>
                                            <li>DLI</li>
                                        </ul>
                                    </li>
                                    <li class="mr-1 w-75 ">
                                        <ul class="text-center">
                                            <li>01h:55m</li>
                                            <li style="font-size: 14px;">QH 1424</li>
                                            <li style="font-size: 10px;">Airbus A320t</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="text-center">
                                            <li>21:20</li>
                                            <li>HAN</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                                <div class="col-9">
                                    <div class="row">
                                        <div class="col-4 text-right ">
                                            <div class="check eco" style="">
                                                <span>Choose a flight </span>
                                                <input  class="ml-1" type="radio" id="check" name ="check-flight" value="flight-two-eco">
                                                <p style="">599,000 VND</p>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <div class="check plus">
                                                <span>Choose a flight </span>
                                                <input  class="ml-1" type="radio" id="check" name="check-flight" value="flight-tow-plus">
                                                <p>599,000 VND</p>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <div class="check business">
                                                <span>Choose a flight </span>
                                                <input  class="ml-1" type="radio" id="check" name="check-flight" value="flight-tow-business">
                                                <p>599,000 VND</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="content-step1 row mt-3" style="">
                            <div class="col-3">
                                <ul  class="date-fly w-100">
                                    <li class="mr-3 w-25">
                                        <ul class="text-center">
                                            <li>19:25</li>
                                            <li>DLI</li>
                                        </ul>
                                    </li>
                                    <li class="mr-1 w-75 ">
                                        <ul class="text-center">
                                            <li>01h:55m</li>
                                            <li style="font-size: 14px;">QH 1424</li>
                                            <li style="font-size: 10px;">Airbus A320t</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="text-center">
                                            <li>21:20</li>
                                            <li>HAN</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-4 text-right ">
                                        <div class="check eco" style="">
                                            <span>Choose a flight </span>
                                            <input  class="ml-1" type="radio" id="check" name ="check-flight" value="flight-one-eco">
                                            <p style="">599,000 VND</p>
                                        </div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <div class="check plus">
                                            <span>Choose a flight </span>
                                            <input  class="ml-1" type="radio" id="check" name="check-flight" value="flight-one-plus">
                                            <p>599,000 VND</p>
                                        </div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <div class="check business">
                                            <span>Choose a flight </span>
                                            <input  class="ml-1" type="radio" id="check" name="check-flight" value="flight-one-business">
                                            <p>599,000 VND</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-step1 row mt-3" style="">
                            <div class="col-3">
                                <ul  class="date-fly w-100">
                                    <li class="mr-3 w-25">
                                        <ul class="text-center">
                                            <li>19:25</li>
                                            <li>DLI</li>
                                        </ul>
                                    </li>
                                    <li class="mr-1 w-75 ">
                                        <ul class="text-center">
                                            <li>01h:55m</li>
                                            <li style="font-size: 14px;">QH 1424</li>
                                            <li style="font-size: 10px;">Airbus A320t</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="text-center">
                                            <li>21:20</li>
                                            <li>HAN</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-4 text-right ">
                                        <div class="check eco" style="">
                                            <span>Choose a flight </span>
                                            <input  class="ml-1" type="radio" id="check" name ="check-flight" value="flight-one-eco">
                                            <p style="">599,000 VND</p>
                                        </div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <div class="check plus">
                                            <span>Choose a flight </span>
                                            <input  class="ml-1" type="radio" id="check" name="check-flight" value="flight-one-plus">
                                            <p>599,000 VND</p>
                                        </div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <div class="check business">
                                            <span>Choose a flight </span>
                                            <input  class="ml-1" type="radio" id="check" name="check-flight" value="flight-one-business">
                                            <p>599,000 VND</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 mt-5" >
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
    <script type="text/javascript" src="{{ asset('js/destinations.js') }}"></script>
@endsection

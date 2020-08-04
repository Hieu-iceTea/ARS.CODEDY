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

        <div class="background_image" style="background-image:url({{ asset('source/images/destinations.jpg') }})"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title mt-5"><h2>Infomation your tickets</h2></div>
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
                    <div class="col-sm-3 ">
                        <p>
                            <span class="badge badge-light">3</span>Bonus services
                        </p>
                    </div>
                    <div class="col-sm-3 active">
                        <p>
                            <span class="badge badge-light">4</span> Pay
                        </p>
                    </div>
                </div>
                <div class=" row mt-5">
                    <div class="col-8">
                        <div class="title-step4 row">
                            <h4 style="">Review The Journey</h4>
                        </div>
                        <div class="fligh-step4 row">
                            <div class="card w-100">
                                <div class="card-header "style="">
                                    <h5 class="media card-title"> <span>Flight</span></h5>
                                </div>
                                <div class="card-body">
                                    <h4> Departure day:: thứ ngày tháng năm</h4>
                                    <p>00:00 Ha Noi</p>
                                    <p>01:55 Ho Chi Minh</p>
                                    <h5> ARS.CODERY Flight time</h5>
                                    <h5 class="card-text-link">Ticket type: </h5>

                                </div>
                            </div>
                        </div>
                        <div class="customer-step4 row mt-4 ">
                            <div class="card w-100">
                                <div class="card-header">
                                    <h5 class="card-title">Passenger</h5>
                                </div>
                            <div class="card-body">
                                <h5 class="card-title"><span>1. </span>Nguyễn Văn A</h5>
                                <h5 class="card-title"><span>2. </span>Nguyễn Văn B</h5>
                            </div>
                        </div>

                        </div>
                        <div class="title-step4 row">
                            <h4 style="">Payment details</h4>
                        </div>
                        <div class="solutionpayment row  ">
                            <div class=" title card w-100">
                                <div class="card-header "style="">
                                    <h5 class="media" style="margin-top: 5px"> Payment methods</h5>
                                </div>
                            <div class="card-body">
                                <div class="row">
                                    <p class="ml-3 title">Choose your preferred payment method </p>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card" style="width: 14rem;">
                                            <div class="card-body">
                                                <h5 class="card-title">Credit</h5>
                                                <img src="{{ asset('source/images/apple-pay-1.png') }}" class ="w-75" alt="">
                                                <p class="card-text"></p>
                                                <a href="#" class="card-link"></a>
                                                <a href="#" class="card-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card" style="width: 14rem;">
                                            <div class="card-body">
                                                <h5 class="card-title">ViSa</h5>
                                                <h6 class="card-subtitle mb-2 text-muted"></h6>
                                                <img src="{{ asset('source/images/apple-pay-1.png') }}" class ="w-75" alt="">

                                                <p class="card-text"></p>
                                                <a href="#" class="card-link"></a>
                                                <a href="#" class="card-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card" style="width: 14rem;">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <h6 class="card-subtitle mb-2 text-muted"></h6>
                                                <img src="{{ asset('source/images/apple-pay-1.png') }}" class ="w-75" alt="">

                                                <p class="card-text"></p>
                                                <a href="#" class="card-link"></a>
                                                <a href="#" class="card-link"></a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-4">
                                        <div class="card" style="width: 14rem;">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <img src="{{ asset('source/images/apple-pay-1.png') }}" class ="w-75" alt="">

                                                <h6 class="card-subtitle mb-2 text-muted"></h6>
                                                <p class="card-text"></p>
                                                <a href="#" class="card-link"></a>
                                                <a href="#" class="card-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card" style="width: 14rem;">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <img src="{{ asset('source/images/apple-pay-1.png') }}" class ="w-75" alt="">

                                                <h6 class="card-subtitle mb-2 text-muted"></h6>
                                                <p class="card-text"></p>
                                                <a href="#" class="card-link"></a>
                                                <a href="#" class="card-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card" style="width: 14rem;">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <img src="{{ asset('source/images/apple-pay-1.png') }}" class ="w-75" alt="">

                                                <h6 class="card-subtitle mb-2 text-muted"></h6>
                                                <p class="card-text"></p>
                                                <a href="#" class="card-link"></a>
                                                <a href="#" class="card-link"></a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="info-ticker mt-4 row">
                            <div class="card w-100">
                                <div class="card-header">
                                    <h5 class="media" style=""> Ticket details</h5>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card-body">
                                                <h5 class="card-title"><span class="mr-1">19:25  </span> <span class="mr-1">01h:55m  </span> <span> 19:30</span></h5>
                                                <h5 class="card-title"><span class="mr-1">HAN  </span> <span class="mr-1">ARS.CODDY  </span> <span> ĐNA</span></h5>
                                                <p class="card-text">Ticket price (adult)</p>
                                                <p class="card-text">Security screening fee</p>
                                                <p class="card-text">Domestic airport charges</p>
                                                <p class="card-text">Utility fee paid</p>
                                                <p class="card-text">Surcharge for system administration</p>
                                                <h4 >Total VAT</h4>
                                                <h4 >Total flight costs</h4>

                                            </div>
                                        </div>
                                        <div class="col-6 text-right ">
                                            <div class="card-body">
                                                <br>
                                                <br>
                                                <p class="card-text">00.000VNĐ</p>
                                                <p class="card-text">000.000VNĐ</p>
                                                <p class="card-text">000.000VNĐ</p>
                                                <p class="card-text">000.000VNĐ</p>
                                                <p class="card-text">000.000VNĐ</p>
                                                <p class="card-text">000.000VNĐ</p>
                                                <p class="card-text">000.000VNĐ</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="info-ticker mt-4 row">
                            <div class="card w-100">
                                <div class="card-header check">
                                    <form action="">
                                        <h5 class="media" style=""> <input type="checkbox" aria-label="Radio button for following text input">I have read and accept the terms of use as well as the main
                                            Book Face Protection Of Airlines</h5>
                                    </form>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 text-right ">
                                            <div class="card-body">
                                                <p class="card-text">Privacy Policy</p>
                                                <p class="card-text">Conditions for using the online booking function</p>
                                                <p class="card-text">Online ticket prices</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a type="button"  href="" class="btn mt-3 w-100 position-sticky contineu">Accept and pay immediately <span><i class="fa fa-angle-right"></i></span></a>
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

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/destinations.js') }}"></script>
@endsection

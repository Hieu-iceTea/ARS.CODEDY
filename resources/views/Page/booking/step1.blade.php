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
    <div class="home">
        <div class="background_image" style="background-image:url(../source/images/contact.jpg)"></div>
    </div>
    <!-- Search -->
    <div class="home_search page_ticket">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_search_container">
                        <div class="home_search_title">Search for your ticket</div>
                        <div class="home_search_content">
                            <form action="../ticket" method="get" class="home_search_form" id="home_search_form">
                                <div
                                    class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">

                                    <input type="text" class="search_input search_input_1" id="code" name="code"
                                           placeholder="Code">

                                    <select class="search_input search_input_2" id="from" name="from">
                                        <option selected value="">-- From --</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                    </select>

                                    <select class="search_input search_input_3" id="to" name="to">
                                        <option selected value="">-- To --</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                        <option value=0>Ha Noi</option>
                                        <option value=1>Ho Chi Minh</option>
                                        <option value=2>Da Lat</option>
                                    </select>

                                    <input type="date" class="search_input search_input_4" id="departure"
                                           name="departure" min="2020-07-31">

                                    <button class="home_search_button" type="submit">search</button>
                                </div>
                            </form>
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
                    <div class="col-sm-3 active ">
                        <p>
                            <span class="badge badge-light">1</span> Chuyến Bay
                        </p>
                    </div>
                    <div class="col-sm-3 ">
                        <p>
                            <span class="badge badge-light" >2</span>Thông Tin Khách Hàng
                        </p>
                    </div>
                    <div class="col-sm-3 ">
                        <p>
                            <span class="badge badge-light">3</span>Dịch Vụ Bổ Sung
                        </p>
                    </div>
                    <div class="col-sm-3 ">
                        <p>
                            <span class="badge badge-light">4</span> Thanh Toán
                        </p>
                    </div>
                </div>
                <div class=" row mt-5">
                    <div class="col-8">
                        <div class="locale-vi row">
                            <div class="media">
                                <img class="mr-3" src="../source/images/iconfight.png" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0"  style="">Chuyến đi</h5>
                                    <h4> <spam>Hồ Chí Minh</spam> (SGN) tới <spam>Hà Nội </spam>(HAN)</h4>
                                </div>
                            </div>
                        </div>
                        <div class="Active-date row">
                            <div class="col" style="">
                                <p>  Thứ Năm, 30. Tháng Bảy 2020</p>
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
                            <div class="col-3 text-right ">
                                <div class="check eco" style="">
                                    <form action=""><span>Chọn chuyến bay </span><input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                    <p style="">599,000 VND</p>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <div class="check plus">
                                    <form action=""><span>Chọn chuyến bay </span><input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                    <p>599,000 VND</p>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <div class="check business">
                                    <form action=""><span>Chọn chuyến bay </span><input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                    <p>599,000 VND</p>
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
                            <div class="col-3 text-right ">
                                <div class="check eco" style="">
                                    <form action=""><span>Chọn chuyến bay </span><input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                    <p style="">599,000 VND</p>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <div class="check plus">
                                    <form action=""><span>Chọn chuyến bay </span><input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                    <p>599,000 VND</p>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <div class="check business">
                                    <form action=""><span>Chọn chuyến bay </span><input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                    <p>599,000 VND</p>
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
                            <div class="col-3 text-right ">
                                <div class="check eco" style="">
                                    <form action=""><span>Chọn chuyến bay </span><input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                    <p style="">599,000 VND</p>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <div class="check plus">
                                    <form action=""><span>Chọn chuyến bay </span><input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                    <p>599,000 VND</p>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <div class="check business">
                                    <form action=""><span>Chọn chuyến bay </span><input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                    <p>599,000 VND</p>
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
                            <div class="col-3 text-right ">
                                <div class="check eco" style="">
                                    <form action=""><span>Chọn chuyến bay </span><input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                    <p style="">599,000 VND</p>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <div class="check plus">
                                    <form action=""><span>Chọn chuyến bay </span><input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                    <p>599,000 VND</p>
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <div class="check business">
                                    <form action=""><span>Chọn chuyến bay </span><input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                    <p>599,000 VND</p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-4">
                        <div class="card cart-info  w-100"  style="width: 18rem;">
                            <img class="card-img-top" src="../source/images/destination_5.jpg" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4> <spam>Hồ Chí Minh</spam> (SGN) tới <spam>Hà Nội </spam>(HAN)</h4>
                                <p class="card-text">Khứ Hồi | 1 Người Lớn</p>
                                <p class="card-text-link"><a href="" style="text-decoration: none">Thay đổi lịch trình chuyến bay</a></p>
                            </div>
                        </div>
                        <div class="card-Clearfix card mt-3  w-100" style="width: 18rem;">
                            <div class="card-body text-center">
                                <h5 class="card-title" ><span style="font-size: 20px;color: #33597C;font-weight: 600">Tổng Tiền</span> : 3000.000.000 vnđ</h5>
                                <h6 class="card-subtitle mb-2 text-muted"></h6>
                                <p class="card-text">Bao gồm tuế và phí dịch vụ</p>

                            </div>
                        </div>
                        <div class="card mt-3 cart-content w-100" style="width: 18rem;">
                            <div class="card-body text-center">
                                <h5 class="card-title" style=""><span style="font-size: 20px;color: #33597C;font-weight: 600">Tổng Tiền</span> : 3000.000.000 vnđ</h5>

                                <h6 class="card-subtitle mb-2 text-muted"></h6>
                                <h4 style=""> <spam style="font-family: 'Oswald', sans-serif;font-weight: bold"></spam> (SGN) tới <spam style="font-family: 'Oswald', sans-serif;font-weight: bold"></spam>(HAN)</h4>
                                <p class="card-text" >CN 02/08/2020 | 19:25 - 20:30</p>
                                <p class="card-text">Người lớn 1 * 2.500.000 = <span>2.500.000</span></p>
                            </div>
                        </div>

                        <button type="button" class="btn mt-3 w-100">Tiếp Theo</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
@endsection

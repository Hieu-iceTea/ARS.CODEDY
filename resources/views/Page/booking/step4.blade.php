@extends('master')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/destinations.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/destinations_responsive.css') }}">
@endsection

<!-- Content Home -->
@section('Content')
    <!-- Home -->

    <div class="home page_ticket">

        <div class="background_image" style="background-image:url(source/images/destinations.jpg)"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title"><h2>Manage your tickets</h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Search -->
    <div class="home_search page_ticket">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_search_container">
                        <div class="home_search_title">Search for your ticket</div>
                        <div class="home_search_content">
                            <form action="ticket" method="get" class="home_search_form" id="home_search_form">
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

    <!-- Payment: -->
    <div class="mainPayment">
        <div class="Progress mt-5 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="bg-light" >
                            <span class="badge badge-light">1</span> Chuyến bay
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p class="bg-light">
                            <span class="badge badge-light">2</span> Thông tin hành khách
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p class="bg-light">
                            <span class="badge badge-light">3</span> Dịch vụ bổ sung
                        </p>
                    </div>
                    <div class="col-sm-3"style="background-color: #33597C;height: 23px; color: white">
                        <p>
                            <span class="badge badge-light">4</span> Thanh toán
                        </p>
                    </div>
                </div>
                    <div class="col-8">
                        <div class="row">
                            <h4 style="color: #33597C; font-weight: 700;margin: 15px 0">Xem lại hành trình</h4>
                        </div>
                        <div class="row">
                            <div class="card w-100">
                                <div class="card-header "style="background-color: #33597C; color: white; height: 62px">
                                    <h5 class="media card-title"> <img class="mr-3" src="../source/images/iconfight.png" alt="Generic placeholder image">  <span>Chuyến bay</span></h5>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Ngày khởi hành: thứ ngày tháng năm</h5>
                                    <p>00:00 Hà Nội</p>
                                    <p>00:00 Hà Nội</p>
                                    <p> ARS.CODERY Thời gian bay</p>
                                    <p class="card-text"></p>
                                    <h5 class="card-title">Hãng vé đã chọn</h5>

                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 ">
                            <div class="card w-100">
                                <div class="card-header "style="background-color: #33597C; color: white; height: 62px"">
                                <h5 class="card-title"style="margin-top: 5px">Hành khách</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">1.Nguyễn Văn A</h5>
                                <h5 class="card-title">1.Nguyễn Văn B</h5>
                            </div>
                        </div>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <p class="ml-3">Chọn phương thức thanh toán yêu thích</p>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card" style="width: 14rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Thẻ tín dụng</h5>
                                            <img src="apple-pay-1.png" class ="w-75" alt="">
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
                                            <img src="apple-pay-1.png" class ="w-75" alt="">
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
                                            <img src="apple-pay-1.png" class ="w-75" alt="">
                                            <p class="card-text"></p>
                                            <a href="#" class="card-link"></a>
                                            <a href="#" class="card-link"></a>
                                        </div>
                                    </div>


                            </div>
                            <div class="row mt-2">
                                <div class="col-md-4">
                                    <div class="card" style="width: 14rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <img src="apple-pay-1.png" class ="w-75" alt="">
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
                                            <img src="apple-pay-1.png" class ="w-75" alt="">
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
                                            <img src="apple-pay-1.png" class ="w-75" alt="">
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
                                <div class="col-6 text-right ">
                                    <div class="card-body">
                                        <br>
                                        <br>
                                        <BR>
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

            </div>
            <div class="col-4">
                <div class="card  w-100"  style="width: 18rem;">
                    <img class="card-img-top" src="https://via.placeholder.com/250" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Hà Nội đến Đà Nẵng</p>
                        <p class="card-text">khứ hồi | 1 người lớn</p>
                        <br>
                        <p class="card-text">Thay đổi lịch trình chuyến bay</p>
                    </div>
                </div>
                <div class="card mt-3  w-100" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Tổng tiền : 3000.000.000 vnđ</h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <p class="card-text">Bao gồm tuế và phí dịch vụ</p>
                        <a href="#" class="card-link"></a>
                        <a href="#" class="card-link"></a>
                    </div>
                </div>
                <div class="card mt-3  w-100" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">tóm tắt : 2.500.000</h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <p class="card-text">HNA tới ĐNA</p>
                        <p class="card-text">CN 02/08/2020 | 19:25 - 20:30</p>
                        <p class="card-text">Người lớn 1 * 2.500.000 = 2.500.000 </p>

                    </div>
                </div>

                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0 text-right">
                                    <p>Chính sách bảo mật</p>
                                    <p>Điều kiện sử dụng chức năng đặt chỗ trực tuyến</p>
                                    <p>Giá vé trực tuyến</p>
                                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/destinations.js') }}"></script>
@endsection

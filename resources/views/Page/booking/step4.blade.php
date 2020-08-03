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
                    <div class="col-sm-3 active ">
                        <p>
                            <span class="badge badge-light">4</span> Thanh Toán
                        </p>
                    </div>
                </div>
                <div class=" row mt-5">
                    <div class="col-8">
                        <div class="title-step4 row">
                            <h4 style="">Xem Lại Hành Trình</h4>
                        </div>
                        <div class="fligh-step4 row">
                            <div class="card w-100">
                                <div class="card-header "style="">
                                    <h5 class="media card-title"> <span>Chuyến bay</span></h5>
                                </div>
                                <div class="card-body">
                                    <h4> Ngày khởi hành: thứ ngày tháng năm</h4>
                                    <p>00:00 Hà Nội</p>
                                    <p>00:00 Hà Nội</p>
                                    <h5> ARS.CODERY Thời gian bay</h5>
                                    <h5 class="card-text-link">Loại vé: </h5>

                                </div>
                            </div>
                        </div>
                        <div class="customer-step4 row mt-4 ">
                            <div class="card w-100">
                                <div class="card-header">
                                    <h5 class="card-title">Hành khách</h5>
                                </div>
                            <div class="card-body">
                                <h5 class="card-title"><span>1. </span>Nguyễn Văn A</h5>
                                <h5 class="card-title"><span>2. </span>Nguyễn Văn B</h5>
                            </div>
                        </div>

                        </div>
                        <div class="title-step4 row">
                            <h4 style="">Chi tiết thanh toán</h4>
                        </div>
                        <div class="solutionpayment row  ">
                            <div class=" title card w-100">
                                <div class="card-header "style="">
                                    <h5 class="media" style="margin-top: 5px"> Phương thức thanh toán</h5>
                                </div>
                            <div class="card-body">
                                <div class="row">
                                    <p class="ml-3 title">Chọn phương thức thanh toán yêu thích</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card" style="width: 14rem;">
                                            <div class="card-body">
                                                <h5 class="card-title">Thẻ tín dụng</h5>
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
                                    <h5 class="media" style=""> Thông tin chi tiết vé</h5>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card-body">
                                                <h5 class="card-title"><span class="mr-1">19:25  </span> <span class="mr-1">01h:55m  </span> <span> 19:30</span></h5>
                                                <h5 class="card-title"><span class="mr-1">HAN  </span> <span class="mr-1">ARS.CODDY  </span> <span> ĐNA</span></h5>
                                                <p class="card-text">Gía vé(người lớn)</p>
                                                <p class="card-text">phí an ninh soi chiếu</p>
                                                <p class="card-text">Phí sân bay nội địa</p>
                                                <p class="card-text">Phí tiện ích thanh toán</p>
                                                <p class="card-text">Phụ thu quản trị hệ thống</p>
                                                <h4 >Tổng VAT</h4>
                                                <h4 >Tổng chi phí chuyến bay</h4>

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
                                        <h5 class="media" style=""> <input type="checkbox" aria-label="Radio button for following text input">Tôi Đã Đọc Và Chấp Nhận Điều Khoản Sử Dụng Cũng Như Chính
                                            Sách Bảo Mặt Của Hãng Hàng Không</h5>
                                    </form>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 text-right ">
                                            <div class="card-body">
                                                <p class="card-text">Chính sách bảo mật</p>
                                                <p class="card-text">Điều kiện sử dụng chức năng đặt chỗ trực tuyến</p>
                                                <p class="card-text">Giá vé trực tuyến</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a type="button"  href="" class="btn mt-3 w-100 position-sticky contineu">Chấp nhận và thanh toán ngay <span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                    <div class=" col-4 " >
                        <div class="card cart-info  w-100"  style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('source/images/destination_5.jpg') }}" alt="Card image cap">
                            <div class="card-body text-center" style="position: sticky; top:0;z-index: 10">
                                <h4> <span>Hồ Chí Minh</span> (SGN) tới <span>Hà Nội </span>(HAN)</h4>
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
                                <h4 style=""> <span style="font-family: 'Oswald', sans-serif;font-weight: bold"></span> (SGN) tới <span style="font-family: 'Oswald', sans-serif;font-weight: bold"></span>(HAN)</h4>
                                <p class="card-text" >CN 02/08/2020 | 19:25 - 20:30</p>
                                <p class="card-text">Người lớn 1 * 2.500.000 = <span>2.500.000</span></p>
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

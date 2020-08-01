@extends('master')
<!-- Style Main_style-->
@section('style')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/my_styles.css') }}">
@endsection
@section('Content')
    <div class="home">
        <div class="background_image" style="background-image:url(../source/images/contact.jpg)"></div>
    </div>
    <div class="main">
        <div class="Progress mt-5 mb-4">
            <div class="container">
{{--                Số thứ tụ đăng kí--}}
                <div class="row">
                    <div class="col-sm-3">
                        <p class="bg-light">
                            <span class="badge badge-light">1</span> Chuyến bay
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p class="bg-light">
                            <span class="badge badge-light">2</span> Thông tin hành khách
                        </p>
                    </div>
                    <div class="col-sm-3" style="background-color: #33597C;height: 23px;">
                        <p style ="color: white">
                            <span class="badge badge-light">3</span> Dịch vụ bổ sung
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p class="bg-light" >
                            <span class="badge badge-light">4</span> Thanh toán
                        </p>
                    </div>
                </div>


{{--                Phần chính của trang--}}
                <div class="row">
{{--                Content--}}
{{--                    Nội dung chính--}}
                    <div class="col-lg-8 col-sm-12" style="width-max: 500px;">
                        <div class="container">
{{--                        Title Page--}}
                            <div class="row mt-5">
                            <div class="section-header color-blue">
                                <h3>
                                    <i class="fa fa-suitcase" aria-hidden="true"></i>
                                    <span></span>
                                    Lựa chọn bổ sung
                                </h3>
                            </div>
                        </div>
{{--                            Nội dung lựa chọn bổ sung--}}
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
                                                        <h4>Chọn chỗ ngồi ưu thích của bạn</h4>
                                                    </div>
                                                </div>
                                                <div class="col-4 list">
                                                    <div class="column-inner">
                                                        <ul class="">
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Lựa chọn chỗ ngồi cá nhân</p></li>
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Ghế ngồi tiêu chuẩn</p></li>
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Chỗ ngồi rộng chân</p></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <img src="https://www.bambooairways.com/reservation/common/framework/en_US/public/img/extras-seats.jpg" class="rounded mx-auto d-block" width="257px" alt="">
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
                                                        <h4>Ưa tiên làm thủ tục</h4>
                                                    </div>
                                                </div>
                                                <div class="col-4 list">
                                                    <div class="column-inner">
                                                        <ul class="">
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Tiết kiệm thời gian</p></li>
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Được sử dụng quầy ưu tiên</p></li>
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Được sử dụng lối đi ưu tiên tại cửa khởi hành</p></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <img src="https://www.bambooairways.com/reservation/common/framework/en_US/public/img/extras-luggage.jpg" alt="" width="257px">
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
                                                        <h4>Sử dụng phòng chờ thương gia</h4>
                                                    </div>
                                                </div>
                                                <div class="col-4 list">
                                                    <div class="column-inner">
                                                        <ul class="">
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Khẳng định đẳng cấo</p></li>
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Tận hưởng không gian riêng tư</p></li>
                                                            <li><p><span><i class="fa fa-check" aria-hidden="true"></i></span>Trải nghiệm dịch vụ sang trọng</p></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <img src="https://www.bambooairways.com/reservation/common/framework/en_US/public/img/Priority-check-in.jpg" alt="" width="257px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

{{--               Thanh bên trái như nhau k cần sửa--}}
                    <div class="col-sm-12 mt-5 col-lg-4">
                        <div class="container">
                    <div class="card w-100 ml-5"  style="width: 10rem;">
                        <img class="card-img-top" src="https://via.placeholder.com/200" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Hà Nội đến Đà Nẵng</p>
                            <p class="card-text">khứ hồi | 1 người lớn</p>
                            <br>
                            <p class="card-text">Thay đổi lịch trình chuyến bay</p>
                        </div>
                    </div>
                    <div class="card mt-3  w-100 ml-5" style="width: 10rem;">
                        <div class="card-body">
                            <h5 class="card-title">Tổng tiền : 3000.000.000 vnđ</h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text">Bao gồm tuế và phí dịch vụ</p>
                            <a href="#" class="card-link"></a>
                            <a href="#" class="card-link"></a>
                        </div>
                    </div>
                    <div class="card mt-3  w-100 ml-5" style="width: 10rem;">
                        <div class="card-body">
                            <h5 class="card-title">tóm tắt : 2.500.000</h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <p class="card-text">HNA tới ĐNA</p>
                            <p class="card-text">CN 02/08/2020 | 19:25 - 20:30</p>
                            <p class="card-text">Người lớn 1 * 2.500.000 = 2.500.000 </p>

                        </div>
                    </div>

                    <button type="button" class="btn btn-success mt-3 w-75 ml-5">tiếp theo</button>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
@endsection





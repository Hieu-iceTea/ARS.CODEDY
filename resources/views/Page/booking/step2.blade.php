@extends('master')
<!-- Style Main_style-->
@section('style')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
@endsection
@section('Content')
    <div class="home">
        <div class="background_image" style="background-image:url(../source/images/contact.jpg)"></div>
    </div>
    <div class="main">
        <div class="Progress mt-5 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="bg-primary">
                            <span class="badge badge-light">4</span>SSS Notifications
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p class="bg-light">
                            <span class="badge badge-light">4</span> Notifications
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p class="bg-light">
                            <span class="badge badge-light">4</span> Notifications
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p class="bg-light">
                            <span class="badge badge-light">4</span> Notifications
                        </p>
                    </div>
                </div>
            </div>

            <div class="container my-3">
                <div class="row">
                    <div class="col-lg-3" style="font-size: 500%" >
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    <div class="col-lg-3 mt-4" style="margin-left: -170px;">
                        <p>Who will fly</p>
                        <p>Your passenger data</p>
                    </div>
                </div>
            </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
{{--                                Khách hàng--}}
                                <div class="card width_card">
                                    <div class="bg-title">
                                        <p class="title">Hành khách</p>
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
                                                <div>Tên đệm và tên*</div>
                                                <div class="input-group mb-3 width_input_content">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Tên đệm và tên" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="m-lg-3">
                                                <div>Họ*</div>
                                                <div class="input-group mb-3 width_input_content">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Tên đệm và tên" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <p class="ml-3 margin_content_notification">Vui lòng điền đầy đủ họ tên theo giấy tờ tùy thân</p>
                                        </div>
                                    </div>
                                    <div class="container margin_top_container">
                                        <div class="row">
                                            <div class="m-lg-3">
                                                <div>Ngày sinh</div>
                                                <div class="input-group mb-3 width_input_opption">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Ngày sinh" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="m-lg-3">
                                                <div>Quốc tịch*</div>
                                                <div class="input-group width_input_content">
                                                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                        <option selected>Việt Nam</option>
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
                                            <div>Số Hội Viên</div>
                                            <div class="input-group mb-3 width_card_w100">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container my-3">
                                    <div class="row">
                                        <div class="col-lg-3" style="font-size: 500%" >
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-lg-3 mt-4" style="margin-left: -100px;">
                                            <p>Who will fly</p>
                                            <p>Your passenger data</p>
                                        </div>
                                    </div>
                                </div>

{{--                                Thông tin liên hệ--}}
                                <div class="card width_card">
                                    <div class="bg-title">
                                        <p class="title">Thông tin liên hệ</p>
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
                                                <div>Tên đệm và tên*</div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Tên đệm và tên" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="m-lg-3">
                                                <div>Họ*</div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Tên đệm và tên" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <p class="ml-3 margin_content_notification">Vui lòng điền đầy đủ họ tên theo giấy tờ tùy thân</p>
                                            <div class="container margin_top_container">
                                                <div class="row">
                                                    <div class="m-lg-3">
                                                        <div>Email*</div>
                                                        <div class="input-group mb-3 width_input_prepend">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <input type="checkbox" class="mt-5 size_checkbox"><p class=" ml-2" >
                                                        Đăng ký để cập nhập thông tin mới nhất từ hãng và<br> các chương trình khuyến mại</p>
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
                                                    <div class="m-lg-3" >
                                                        <div class="input-group mb-3" style="width: 12rem">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Số điện thoại" aria-label="Username" aria-describedby="basic-addon1" style="margin-top: 21px">
                                                        </div>
                                                    </div>
                                                    <input type="checkbox" class="mt-5 size_checkbox" ><p class=" ml-2 content_promotion">Đăng ký để nhận tin tức về các ưu đãi, khuyến mại<br>
                                                        mới nhất từ Bamboo Airways</p>

                                                    <p class="ml-3 note_information">Lưu ý: Quý khách vui lòng cung cấp thông tin chính xác, Bamboo Airways sẽ<br> sử dụng để liên lạc và hỗ trợ Quý khách trong trường hợp cần thiết.</p>

                                                    <div class="container margin_top_container">
                                                        <div class="row">
                                                            <div class="m-lg-3">
                                                                <div>Tên Đường*</div>
                                                                <div class="input-group mb-3 width_input_prepend">
                                                                    <div class="input-group-prepend">
                                                                    </div>
                                                                    <input type="text" class="form-control" placeholder="Phố" aria-label="Username" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container margin_top_container">
                                                        <div class="row">
                                                            <div class="m-lg-3">
                                                                <div>Thành Phố*</div>
                                                                <div class="input-group mb-3 width_input-group">
                                                                    <div class="input-group-prepend">
                                                                    </div>
                                                                    <input type="text" class="form-control" placeholder="Thành phố" aria-label="Username" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                            <div class="m-lg-3">
                                                                <div>Quốc gia*</div>
                                                                <div class="input-group width_input-group">
                                                                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                                        <option selected>Việt Nam</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <p class="ml-3 note_information">(1) Tôi đồng ý nhận email thông báo. Để biết thêm thông tin liên quan đến việc Bamboo Airways xử lý thông tin cá nhân của khách hàng, vui lòng xem chi tiết tại
                                                                Chính sách bảo mật , Điều kiện sử dụng chức năng đặt chỗ trực tuyến và Điều khoản sử dụng website.
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
{{--                        Thanh toán--}}
                        <div class="col-4">
                            <div class="card  w-100"  style="width: 18rem;">
                                <img class="card-img-top" src="https://via.placeholder.com/200" alt="Card image cap">
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

                            <button type="button" class="btn btn-success mt-3 w-100">tiếp theo</button>
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

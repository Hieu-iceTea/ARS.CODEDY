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
    <div class="home page_ticket" style="height: 586px">

        <div class="background_image" style="background-image:url(../source/images/destinations.jpg)"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title"><h2>Customer information </h2></div>
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
                    <div class="col-sm-3 ">
                        <p>
                            <span class="badge badge-light">1</span> Chuyến Bay
                        </p>
                    </div>
                    <div class="col-sm-3  active">
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
                <div class="container booking2_font_family">
                    <div class=" row mt-5">
                        <div class="col-lg-8 col-sm-12">
                            <div class="row mb-4 booking2_color_logo">
                                <div class="media">
                                    <i class="fa fa-users" aria-hidden="true" style="font-size: 400%"></i>
                                    <div class="media-body ml-4">
                                        <h4 class="mt-0">Ai sẽ bay</h4>
                                        <h5>Dữ liệu hành khách của bạn</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-5 booking2_color_logo">
                                <div class="card w-100">
                                    <div class="row">
                                        <div class="col-6 my-4 ml-5">
                                            <div class="media">
                                                <i class="fa fa-address-book" aria-hidden="true" style="font-size: 400%"></i>
                                                <div class="media-body ml-4">
                                                    <h5 class="mt-2">Đăng nhập và đặt chỗ nhanh hơn</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 ml-3">
                                            <div class="form-check">
                                                <input class="form-check-input mt-4" type="radio" name="checklogin" value="1" id="defaultCheck1" style="width: 20px;height: 20px">
                                                <label class="form-check-label mt-3 ml-2" for="defaultCheck1" style="font-size: 90%">
                                                    Tôi muốn đăng nhập bằng tài khoản của Bamboo
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input mt-3" type="radio" name="checklogin" value="2" id="defaultCheck1" style="width: 20px;height: 20px">
                                                <label class="form-check-label mt-3 ml-2" for="defaultCheck1" style="font-size: 90%">
                                                    Tiếp tục mà không cần đăng nhập
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="card w-100">
                                    <h5 class="card-header booking2_color_title">Hành Khách</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div>Danh xưng*</div>
                                                <div class="input-group">
                                                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                        <option selected>Danh xưng</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div>Tên đệm và tên*</div>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Tên đệm và tên" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div>Họ*</div>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Họ" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p class="ml-3" style="font-size: 80%">Vui lòng điền đầy đủ họ tên theo  giấy tờ tùy thân</p>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-4">
                                                <div>Ngày sinh</div>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="date" class="form-control w-75" id="departure"
                                                           name="departure" placeholder="Departure" required>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div>Quốc tịch*</div>
                                                <div class="input-group w-75">
                                                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                        <option selected>Việt Nam</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4 booking2_font_family">
                                            <div class="col-7">
                                                <div>Số Hội Viên</div>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-1 booking2_color_logo booking2_font_family">
                                    <p>Mục bắt buộc*</p>
                                </div>
                            </div>
                            <div class="row my-4 booking2_color_logo">
                                <div class="media">
                                    <i class="fa fa-users" aria-hidden="true" style="font-size: 400%"></i>
                                    <div class="media-body ml-4">
                                        <h4 class="mt-0">Ai sẽ bay</h4>
                                        <h5>Dữ liệu hành khách của bạn</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card w-100">
                                    <h5 class="card-header booking2_color_title ">Thông tin liên hệ</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div>Danh xưng*</div>
                                                <div class="input-group">
                                                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                        <option selected>Danh xưng</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div>Tên đệm và tên*</div>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Tên đệm và tên" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div>Họ*</div>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Họ" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p class="ml-3" style="font-size: 80%">Vui lòng điền đầy đủ họ tên theo  giấy tờ tùy thân</p>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <div>Email*</div>
                                                <div class="input-group mb-3 width_input_prepend">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" >
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input mt-4" type="radio" name="check" value="1" id="defaultCheck1" style="width: 20px;height: 20px">
                                                    <label class="form-check-label mt-3 ml-2" for="defaultCheck1" style="font-size: 80%">
                                                        Đăng ký để cập nhập thông tin mới nhất từ hãng và các chương trình khuyến mại
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
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
                                            <div class="col-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Số điện thoại" aria-label="Username" aria-describedby="basic-addon1" style="margin-top: 21px">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input mt-4" type="radio" name="check" value="2" id="defaultCheck1" style="width: 20px;height: 20px">
                                                    <label class="form-check-label mt-3 ml-2" for="defaultCheck1" style="font-size: 80%">
                                                        Đăng ký để nhận tin tức về các ưu đãi, khuyến mại mới nhất từ Bamboo Airways
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <p style="font-size: 80%">Lưu ý: Quý khách vui lòng cung cấp thông tin chính xác, Bamboo Airways sẽ sử dụng để liên lạc và hỗ trợ Quý khách trong trường hợp cần thiết.</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <div>Tên Đường*</div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Phố" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div>Thành Phố*</div>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Thành phố" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div>Quốc gia*</div>
                                                <div class="input-group">
                                                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                        <option selected>Việt Nam</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <p style="font-size: 80%">(1) Tôi đồng ý nhận email thông báo. Để biết thêm thông tin liên quan đến việc Bamboo Airways xử lý thông tin cá nhân của khách hàng, vui lòng xem chi tiết tại
                                                    Chính sách bảo mật , Điều kiện sử dụng chức năng đặt chỗ trực tuyến và Điều khoản sử dụng website.
                                                </p>
                                            </div>
                                        </div>
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

                            <a type="button"  href="http://ars.codedy/booking/3" class="btn mt-3 w-100 position-sticky contineu">Tiếp Theo  <span><i class="fa fa-angle-right"></i></span></a>
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

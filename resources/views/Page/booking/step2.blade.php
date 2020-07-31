@extends('master')
<!-- Style Main_style-->
@section('style')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <<link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.1-web/css/all.css" />
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
                    <div class="col-sm-3">
                        <p class="bg-light">
                            <span class="badge badge-light">4</span> Notifications
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row mt-5">
                    <div class="col-8">
                        <div class="row">
                            <div class="media">
                                <div class="media-body">
                                    <i class="fas fa-user-friends"></i>
                                    <h5 class="mt-0">Media heading</h5>
                                    Cras sit amet nibh libero,
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
{{--                                Khách hàng--}}
                                <div class="card" style="width: 45rem;">
                                    <div style="border:1px solid black;border-radius: 4px 4px 0px 0px;background-color: #33597C">
                                        <p style="color: white;margin-left: 15px">Hành khách</p>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="m-lg-3">
                                                <div>Danh xưng*</div>
                                                <div class="input-group" style="width: 10rem">
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
                                                <div class="input-group mb-3" style="width: 14rem">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Tên đệm và tên" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="m-lg-3">
                                                <div>Họ*</div>
                                                <div class="input-group mb-3" style="width: 14rem">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Tên đệm và tên" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <p class="ml-3" style="margin-top: -35px">Vui lòng điền đầy đủ họ tên theo giấy tờ tùy thân</p>
                                        </div>
                                    </div>
                                    <div class="container" style="margin-top: -25px">
                                        <div class="row">
                                            <div class="m-lg-3">
                                                <div>Ngày sinh</div>
                                                <div class="input-group mb-3" style="width: 10rem">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Ngày sinh" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="m-lg-3">
                                                <div>Quốc tịch*</div>
                                                <div class="input-group" style="width: 14rem">
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
                                            <div class="input-group mb-3" style="width: 18rem">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row mt-5">
                                        <div class="col-8">
                                            <div class="row">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <i class="fas fa-user-friends"></i>
                                                        <h5 class="mt-0">Media heading</h5>
                                                        Cras sit amet nibh libero,
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

{{--                                Thông tin liên hệ--}}
                                <div class="card" style="width: 45rem;">
                                    <div style="border:1px solid black;border-radius: 4px 4px 0px 0px;background-color: #33597C">
                                        <p style="color: white;margin-left: 15px">Thông tin liên hệ</p>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="m-lg-3">
                                                <div>Danh xưng*</div>
                                                <div class="input-group" style="width: 10rem">
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
                                                <div class="input-group mb-3" style="width: 14rem">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Tên đệm và tên" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="m-lg-3">
                                                <div>Họ*</div>
                                                <div class="input-group mb-3" style="width: 14rem">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Tên đệm và tên" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <p class="ml-3" style="margin-top: -35px">Vui lòng điền đầy đủ họ tên theo giấy tờ tùy thân</p>
                                            <div class="container" style="margin-top: -25px">
                                                <div class="row">
                                                    <div class="m-lg-3">
                                                        <div>Email*</div>
                                                        <div class="input-group mb-3" style="width: 24rem">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <input type="checkbox" class="mt-5" style="width: 18px;height: 18px"><p class=" ml-2" style="font-size:80%;margin-top: 35px">
                                                        Đăng ký để cập nhập thông tin mới nhất từ hãng và<br> các chương trình khuyến mại</p>
                                                </div>
                                            </div>
                                            <div class="container" style="margin-top: -35px">
                                                <div class="row">
                                                    <div class="m-lg-3">
                                                        <div>Số điện thoại*</div>
                                                        <div class="input-group" style="width: 10rem">
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
                                                    <input type="checkbox" class="mt-5" style="width: 18px;height: 18px"><p class=" ml-2" style="font-size:80%;margin-top: 35px">Đăng ký để nhận tin tức về các ưu đãi, khuyến mại<br>
                                                        mới nhất từ Bamboo Airways</p>

                                                    <p class="ml-3" style="font-size: 80%;margin-top: -25px">Lưu ý: Quý khách vui lòng cung cấp thông tin chính xác, Bamboo Airways sẽ<br> sử dụng để liên lạc và hỗ trợ Quý khách trong trường hợp cần thiết.</p>

                                                    <div class="container" style="margin-top: -10px">
                                                        <div class="row">
                                                            <div class="m-lg-3">
                                                                <div>Tên Đường*</div>
                                                                <div class="input-group mb-3" style="width: 24rem">
                                                                    <div class="input-group-prepend">
                                                                    </div>
                                                                    <input type="text" class="form-control" placeholder="Phố" aria-label="Username" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container" style="margin-top: -25px">
                                                        <div class="row">
                                                            <div class="m-lg-3">
                                                                <div>Thành Phố*</div>
                                                                <div class="input-group mb-3" style="width: 20rem">
                                                                    <div class="input-group-prepend">
                                                                    </div>
                                                                    <input type="text" class="form-control" placeholder="Thành phố" aria-label="Username" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                            <div class="m-lg-3">
                                                                <div>Quốc gia*</div>
                                                                <div class="input-group" style="width: 20rem">
                                                                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                                        <option selected>Việt Nam</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <p class="ml-3" style="font-size: 80%;margin-top: -25px">(1) Tôi đồng ý nhận email thông báo. Để biết thêm thông tin liên quan đến việc Bamboo Airways xử lý thông tin cá nhân của khách hàng, vui lòng xem chi tiết tại
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

                        <div class="col-lg-4">
                            <div class="card  w-100"  style="width: 18rem;">
                                <img class="card-img-top" src="https://via.placeholder.com/250" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="card mt-3  w-100" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                            <div class="card mt-3  w-100" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>

                            <button type="button" class="btn btn-success mt-3 w-100">Success</button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
@endsection

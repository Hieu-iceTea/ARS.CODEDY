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
                    <div class="col-sm-3"style="background-color: #33597C;height: 23px;">
                        <p style ="color: white">
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
                    <div class="col-sm-3">
                        <p class="bg-light" >
                            <span class="badge badge-light">4</span> Thanh toán
                        </p>
                    </div>
                </div>
            <div class="row mt-5">
                <div class="col-8">
                    <div class="row">
                        <div class="media">
                            <img class="mr-3" src="../source/images/iconfight.png" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">Chuyến đi</h5>
                                <h4> <spam>Hà Nội</spam> đến <spam>Đà Nẵng</spam></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col  bg-primary text-white">
                            <p style="color: white; font-weight: bold">  Thứ Năm, 30. Tháng Bảy 2020</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-3"></div>
                        <div class="col-3">Bamboo Eco</div>
                        <div class="col-3">Bamboo Plus</div>
                        <div class="col-3">Bamboo Business</div>
                    </div>
                    <div class="row mt-3 " style="background-color: white; padding: 10px;border: 0.5px solid black">
                        <div class="col-3">
                            <ul style="display: flex">
                                <li>
                                    <ul>
                                        <li>19:25</li>
                                        <li>DLI</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>01h 55m</li>
                                        <li>QH 1424</li>
                                        <li>Airbus A320t</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>21:20</li>
                                        <li>HAN</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-3 text-right">
                            <div class="bg-success" style="height: 150px; padding: 10px;color: white">
                                <form action="">Chọn chuyến bay<input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                <p>599,000 VND</p>
                            </div>
                        </div>
                        <div class="col-3 text-right">
                            <div class="bg-success" style="height: 150px; padding: 10px;color: white">
                                <form action="">Chọn chuyến bay<input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                <p>599,000 VND</p>
                            </div>
                        </div>
                        <div class="col-3 text-right">
                            <div class="bg-success" style="height: 150px; padding: 10px;color: white">
                                <form action="">Chọn chuyến bay<input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                <p>599,000 VND</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 " style="background-color: white; padding: 10px;border: 0.5px solid black">
                        <div class="col-3">
                            <ul style="display: flex">
                                <li>
                                    <ul>
                                        <li>19:25</li>
                                        <li>DLI</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>01h 55m</li>
                                        <li>QH 1424</li>
                                        <li>Airbus A320t</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>21:20</li>
                                        <li>HAN</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-3 text-right">
                            <div class="bg-success" style="height: 150px; padding: 10px;color: white">
                                <form action="">Chọn chuyến bay<input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                <p>599,000 VND</p>
                            </div>
                        </div>
                        <div class="col-3 text-right">
                            <div class="bg-success" style="height: 150px; padding: 10px;color: white">
                                <form action="">Chọn chuyến bay<input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                <p>599,000 VND</p>
                            </div>
                        </div>
                        <div class="col-3 text-right">
                            <div class="bg-success" style="height: 150px; padding: 10px;color: white">
                                <form action="">Chọn chuyến bay<input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                <p>599,000 VND</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 " style="background-color: white; padding: 10px;border: 0.5px solid black">
                        <div class="col-3">
                            <ul style="display: flex">
                                <li>
                                    <ul>
                                        <li>19:25</li>
                                        <li>DLI</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>01h 55m</li>
                                        <li>QH 1424</li>
                                        <li>Airbus A320t</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>21:20</li>
                                        <li>HAN</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-3 text-right">
                            <div class="bg-success" style="height: 150px; padding: 10px;color: white">
                                <form action="">Chọn chuyến bay<input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                <p>599,000 VND</p>
                            </div>
                        </div>
                        <div class="col-3 text-right">
                            <div class="bg-success" style="height: 150px; padding: 10px;color: white">
                                <form action="">Chọn chuyến bay<input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                <p>599,000 VND</p>
                            </div>
                        </div>
                        <div class="col-3 text-right">
                            <div class="bg-success" style="height: 150px; padding: 10px;color: white">
                                <form action="">Chọn chuyến bay<input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                <p>599,000 VND</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 " style="background-color: white; padding: 10px;border: 0.5px solid black">
                        <div class="col-3">
                            <ul style="display: flex">
                                <li>
                                    <ul>
                                        <li>19:25</li>
                                        <li>DLI</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>01h 55m</li>
                                        <li>QH 1424</li>
                                        <li>Airbus A320t</li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>21:20</li>
                                        <li>HAN</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-3 text-right">
                            <div class="bg-success" style="height: 150px; padding: 10px;color: white">
                                <form action="">Chọn chuyến bay<input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                <p>599,000 VND</p>
                            </div>
                        </div>
                        <div class="col-3 text-right">
                            <div class="bg-success" style="height: 150px; padding: 10px;color: white">
                                <form action="">Chọn chuyến bay<input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                <p>599,000 VND</p>
                            </div>
                        </div>
                        <div class="col-3 text-right">
                            <div class="bg-success" style="height: 150px; padding: 10px;color: white">
                                <form action="">Chọn chuyến bay<input  class="ml-1" type="radio" id="male" name="gender" value="male"></form>
                                <p>599,000 VND</p>
                            </div>
                        </div>
                    </div>

                </div>
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

@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
@endsection

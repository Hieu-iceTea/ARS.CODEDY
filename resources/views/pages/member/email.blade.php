<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> -->
    <title>Xác nhật đặt chỗ | ARS.CODEDY</title>
</head>

<body
    style="background-color: #e7eff8; font-family: trebuchet,sans-serif; margin-top: 0; box-sizing: border-box; line-height: 1.5; text-align: center;">
<div class="container-fluid">
    <div class="container" style="background-color: #e7eff8; width: 600px; margin: auto;">
        <div class="col-12 mx-auto" style="width: 580px;  margin: 0 auto;">

            <div class="row">
                <div class="container-fluid">
                    <div class="row" style="background-color: #e7eff8; height: 10px;">

                    </div>
                </div>
            </div>

            <div class="row"
                 style="height: 100px; padding: 10px 20px; line-height: 90px; background-color: white; box-sizing: border-box;">
                <h1 class="pl-3" style="color: orange; line-height: 00px; float: left; padding-left: 20px;">
                    <img width="45" height="40"
                         src="http://raw.githubusercontent.com/Hieu-iceTea/ARS.CODEDY/master/public/img/icon/fa-plane.png">
                </h1>
                <h1 class="pl-2"
                    style="color: orange; line-height: 30px; float: left; padding-left: 5px; font-size: 40px; font-weight: 500;">
                    <!-- <i class="fa fa-plane"></i> -->
                    ARS.CODEDY
                </h1>
            </div>

            <div class="row" style="background-color: whitesmoke;  padding: 35px 35px 10px 35px;">
                <div class="container-fluid">
                    <h3 class="m-0 p-0 mt-4" style="margin-top: 0px; font-size: 28px; font-weight: 500;">
                        <strong style="font-size: 32px;">Xác nhận đăng ký tài khoản mới</strong>
                    </h3>
                    <h3 class="m-0 p-0 mt-4"
                        style="margin-top: 0px; font-size: 28px; font-weight: 500; line-height: 50px;">
                        <span>Mã bảo mật:</span>
                        <br>
                        <strong
                            style="font-size: 32px; background-color: orange; padding: 10px; border-radius: 10px; color: white;">
                            {{ $data_send_mail['verification_code'] }}
                        </strong>
                    </h3>
                    <div class="mt-4" style="margin-top: 25px;">
                        <img style="align-items: baseline;" width="130" height="130"
                             src="https://ci3.googleusercontent.com/proxy/Sn3izYiKYnZ6hdCg--Qh0k3hQILgNhK3jvPekpW-ebq6DNddUFPLYlsiNqz7dDAaqHqq33j6suRGg_vja6z1wstOEUjxuTzkk4g5d9CVOFjHv-9Maew=s0-d-e1-ft#https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=ZNA3P2%20"
                             alt="">
                    </div>
                    <h3 class="m-0 p-0 mt-4" style="margin-top: 20px; font-size: 18px; font-weight: 500;">
                        Nhập mã bảo mật ở trên hoặc click vào
                        <a href="http://ars.codedy/member/verify?user_id={{ $data_send_mail['user_id'] }}&verification_code={{ $data_send_mail['verification_code'] }}"
                           target="_blank" style="color: teal; font-size: 20px;">đây</a>
                        để kích hoạt tài khoản của bạn. Chúc bạn có một này vui vẻ!
                        <br>
                        <span style="font-size: 15px;">(Mã sẽ hết hạn sau 5 ngày)</span>
                    </h3>
                    <div class="row mt-5" style="margin-top: 50px; display: flex;">
                        <div class="col-6"
                             style="margin-bottom: 25px; flex: 0 0 50%; width: 50%; box-sizing: border-box;">
                            <b>{{ \App\Utilities\Utility::$gender[$data_send_mail['gender']] . '. ' . $data_send_mail['first_name'] . ' ' . $data_send_mail['last_name'] }}</b>
                            <br>
                            <span>{{ $data_send_mail['address'] }}</span>
                        </div>
                        <div class="col-6" style="flex: 0 0 50%; width: 50%; box-sizing: border-box;">
                            <b>Ngày đăng ký: {{ date('d/m/Y H:i', strtotime($data_send_mail['created_at'])) }}</b>
                            <br>
                            <b>Được cấp bởi: ARS.CODEDY</b>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2 p-4"
                 style="background-color: white; margin-top: 15px; padding: 20px; text-align: left;">
                <table>
                    <tr>
                        <td>
                            <img
                                src="https://ci6.googleusercontent.com/proxy/8eUxMUXMkvgUKX8veBCRQM5N7-jXP0Wx8KjQLaGDch2DnV_5HYw9PMgJXsoqgSR_jonTY9jAftWPKNsN5W9cUUneQ9hz7IhxH4rIXNzHMm0ijbsNjHB9m7g6XfJJ=s0-d-e1-ft#https://www.bambooairways.com/reservation/common/hosted-images/tickets.jpg"
                                alt="">
                        </td>
                        <td class="pl-3" style=" padding-left:15px;">
                                <span class="d-inline"
                                      style="color:#424853; font-family:trebuchet,sans-serif; font-size:16px; font-weight:normal; line-height:22px;">
                                    Quý khách vui lòng kích hoạt tài khoản trước {{ date('d/m/Y, H:i', strtotime($data_send_mail['created_at'] . ' +5 day')) }} LTC. Sau thời
                                    gian đó, nếu chúng tôi vẫn chưa nhận được thông tin kích hoạt, hệ thống sẽ tự động
                                    xóa mã kích hoạt này.
                                </span>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="row mt-2 mb-4" style="margin-top: 15px; margin-bottom: 25px; text-align: left;">
                <div class="container-fluid">
                    <div class="row pl-3 py-2" style="background-color: #f4f8fd; padding: 10px 0 10px 20px;">
                        <b style="color: #00509d; font-size: 18px;">More information</b>
                    </div>
                    <div class="row pl-3 py-2" style="background-color: #fff; padding: 10px 20px;">
                        <table class="table table-sm table-hover mb-1"
                               style="width: 100%; margin-bottom: 5px; border-collapse: collapse;">
                            <tbody>
                            <tr>
                                <td>Designed by:</td>
                                <td>Hiếu iceTea</td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #dee2e6;">Release date:</td>
                                <td style="border-top: 1px solid #dee2e6;">14/08/2020</td>
                            </tr>
                            <tr>
                                <td style="border-top: 1px solid #dee2e6;">Contact</td>
                                <td style="border-top: 1px solid #dee2e6;"><a target="_blank"
                                                                              href="http://fb.com/Hieu.iceTea"
                                                                              style="color: blue;">fb.com/Hieu.iceTea</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="container-fluid">
                    <div class="row" style="background-color: #e7eff8; height: 10px;">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>

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
    style="background-color: #e7eff8; font-family: trebuchet,sans-serif; margin-top: 0; box-sizing: border-box; line-height: 1.5;">
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
                <h1 class="pl-3"
                    style="color: orange; line-height: 00px; float: left; padding-left: 20px; padding-top: 5px;">
                    <img height="40"
                         src="{{$message->embed(asset('img/icon/fa-plane.png'))}}" alt="fa-plane">
                </h1>
                <h1 class="pl-2"
                    style="color: orange; line-height: 30px; float: left; padding-left: 20px; font-size: 40px; font-weight: 500;">
                    <!-- <i class="fa fa-plane"></i> -->
                    ARS.CODEDY
                </h1>
            </div>

            <div class="row" style="background-color: #00509d; height: 360px; padding: 35px; color: white;">
                <div class="container-fluid">
                    <h3 class="m-0 p-0 mt-4" style="margin-top: 0px; font-size: 28px; font-weight: 500;">
                        <strong style="font-size: 32px;">Xác nhận đặt chỗ</strong>
                        <br>
                        Chúc bạn có một chuyến bay tốt đẹp!
                    </h3>
                    <div class="mt-4" style="margin-top: 25px;">
                        <img style="align-items: baseline;" width="130" height="130"
                             src="https://ci3.googleusercontent.com/proxy/Sn3izYiKYnZ6hdCg--Qh0k3hQILgNhK3jvPekpW-ebq6DNddUFPLYlsiNqz7dDAaqHqq33j6suRGg_vja6z1wstOEUjxuTzkk4g5d9CVOFjHv-9Maew=s0-d-e1-ft#https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=ZNA3P2%20"
                             alt="">
                    </div>
                    <div class="row mt-5" style="margin-top: 35px; display: flex;">
                        <div class="col-6"
                             style="margin-bottom: 25px; flex: 0 0 50%; width: 50%; box-sizing: border-box;">
                            <b>{{ \App\Utilities\Utility::$gender[$ticket->contact_gender] }}
                                . {{ $ticket->contact_last_name . '. ' . $ticket->contact_first_name }}</b>
                            <br>
                            <span>{{ $ticket->contact_address }}</span>
                        </div>
                        <div class="col-6" style="flex: 0 0 50%; width: 50%; box-sizing: border-box;">
                            <b>Ngày đặt chỗ: {{ date('d/m/yy H:i', strtotime($ticket->created_at)) }}</b>
                            <br>
                            <b>Mã đặt chỗ: {{ $ticket->code }}</b>
                            <br>
                            <b>Được cấp bởi: ARS.CODEDY</b>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2 p-4" style="background-color: white; margin-top: 15px; padding: 20px;">
                <table>
                    <tr>
                        <td>
                            <img
                                src="https://ci6.googleusercontent.com/proxy/8eUxMUXMkvgUKX8veBCRQM5N7-jXP0Wx8KjQLaGDch2DnV_5HYw9PMgJXsoqgSR_jonTY9jAftWPKNsN5W9cUUneQ9hz7IhxH4rIXNzHMm0ijbsNjHB9m7g6XfJJ=s0-d-e1-ft#https://www.bambooairways.com/reservation/common/hosted-images/tickets.jpg"
                                alt="">
                        </td>

                        @if($ticket->pay_type_id == \App\Utilities\Utility::pay_type_PayLater)
                            <td class="pl-3" style=" padding-left:15px;">
                                <span class="d-inline"
                                      style="color:#424853; font-family:trebuchet,sans-serif; font-size:16px; font-weight:normal; line-height:22px;">
                                    Quý khách vui lòng thanh toán trước {{ date('d/m/Y H:i', strtotime($ticket->created_at . ' +5 day')) }} LTC. Sau thời
                                    gian đó, nếu chúng tôi vẫn chưa nhận được thanh toán, hệ thống sẽ tự động hủy đặt
                                    chỗ của bạn.
                                </span>
                            </td>
                        @endif

                        @if($ticket->pay_type_id == \App\Utilities\Utility::pay_type_VNPay && $ticket->status == \App\Utilities\Utility::ticket_status_Paid)
                            <td class="pl-3" style=" padding-left:15px;">
                                <span class="d-inline"
                                      style="color:#424853; font-family:trebuchet,sans-serif; font-size:16px; font-weight:normal; line-height:22px;">
                                    Vé đã được thanh toán qua cổng thanh toán trực tuyến VNPay. Cảm ơn quý khách đã tin dùng dịch vụ của chúng tôi!
                                </span>
                            </td>
                            <td class="pl-3" style=" padding-left:10px;">
                                <img src="https://vnpay.vn/wp-content/uploads/2020/07/Logo-VNPAYQR-update.png"
                                     width="130px" style="margin-top: 10px;" alt="">
                            </td>
                        @endif

                    </tr>
                </table>
            </div>

            <div class="row mt-2" style="margin-top: 15px;">
                <div class="container-fluid">
                    <div class="row pl-3 py-2" style="background-color: #f4f8fd; padding: 10px 0 10px 20px;">
                        <b>Hành khách</b>
                    </div>
                    <div class="row pl-3 py-2" style="background-color: #fff; padding: 10px 20px 10px 20px;">
                        <table class="table table-sm table-hover"
                               style="text-align: left;  width: 100%; margin-bottom: 5px; border-collapse: collapse;">
                            <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Ngày sinh</th>
                                <th>Số vé điện tử</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ticket->passenger as $passenger)
                                <tr>
                                    <td style="border-top: 1px solid #dee2e6;">{{ $passenger->first_name . '. ' . $passenger->last_name }}
                                        ({{ \App\Utilities\Utility::$passenger_type_vi[$passenger->passenger_type] }})
                                    </td>
                                    <td style="border-top: 1px solid #dee2e6;">{{ date('d/m/Y', strtotime($passenger->dob)) }}</td>
                                    <td style="border-top: 1px solid #dee2e6;"></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row mt-2" style="margin-top: 15px;">
                <div class="container-fluid">
                    <div class="row pl-3 py-2" style="background-color: #f4f8fd; padding: 10px 0 10px 20px;">
                        <b>Thông tin hành trình</b>
                    </div>
                    <div class="row pl-3 py-2"
                         style="background-color: #fff; font-size: 18px; padding: 2px 0 10px 20px; display: flex;">
                        <div class="col-6 p-0" style=" flex: 0 0 70%; max-width: 70%;">
                            <p class="mt-2">
                                <b>Khởi hành:</b>
                                <br>
                                <b>{{ date('d/m/Y', strtotime($ticket->flightSchedule->departure_at)) }}</b>
                            </p>
                            <table class="mt-2">
                                <tr>
                                    <td><b>{{ date('H:i', strtotime($ticket->flightSchedule->departure_at)) }}</b></td>
                                    <td class="pl-4"
                                        style="padding-left: 20px;">{{ $ticket->flightSchedule->airportFrom->name }}</td>
                                </tr>
                                <tr>
                                    <td><b>{{ date('H:i', strtotime($ticket->flightSchedule->arrival_at)) }}</b></td>
                                    <td class="pl-4"
                                        style="padding-left: 20px;">{{ $ticket->flightSchedule->airportTo->name }}</td>
                                </tr>
                            </table>
                            <p class="mt-3" style="color: #848ea3;">
                                Hãng vận chuyển: <b>ARS.CODEY</b>
                                <br>
                                Số hiệu chuyến bay: <b>{{ $ticket->flightSchedule->code }}</b>
                            </p>
                        </div>

                        <div class="col-6 p-0" style="flex: 0 0 30%; max-width: 30%;">
                            <div class="mt-2" style="margin-top: 25px;">
                                <a class="btn btn-info"
                                   href="{{ env('APP_URL') }}/ticket/detail/query?ticketCode={{ $ticket->code }}"
                                   target="_blank"
                                   style="background-color: #17a2b8; padding: .375rem .75rem; border-radius: .25rem; color: #fff; text-decoration: none; display: inline-block; font-size: 1rem;">
                                    Xem chi tiết trên web
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2" style="margin-top: 15px;">
                <div class="container-fluid">
                    <div class="row pl-3 py-2" style="background-color: #f4f8fd; padding: 10px 0 10px 20px;">
                        <b>Extra services</b>
                    </div>
                    <div class="row pl-3 py-2" style="background-color: #fff; padding: 10px 20px;">
                        @if(count($ticket->extraServices()) > 0)
                            <table class="table table-sm table-hover"
                                   style="text-align: left;  width: 100%; margin-bottom: 5px; border-collapse: collapse;">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ticket->extraServices() as $extraService)
                                    <tr>
                                        <td style="border-top: 1px solid #dee2e6;">{{ $extraService->name }}</td>
                                        <td style="border-top: 1px solid #dee2e6;">{!! $extraService->description !!}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No extra services are included</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row mt-2" style="margin-top: 15px;">
                <div class="container-fluid">
                    <div class="row pl-3 py-2" style="background-color: #f4f8fd; padding: 10px 0 10px 20px;">
                        <b>Chi tiết thanh toán</b>
                    </div>
                    <div class="row pl-3 py-2"
                         style="background-color: #fff; font-size: 18px; padding: 2px 20px 10px 20px;">
                        <div class="col-12 p-0">
                            <p class="mt-2">
                                <b>Khách hàng:</b>
                                <br>
                                <b>{{ $ticket->contact_last_name . ' ' . $ticket->contact_first_name }}</b>
                            </p>
                            <hr style="border-top: 1px solid #0000001a;">
                            <table class="mt-2 w-100"
                                   style="font-size: 16px; width: 100%; text-align: left;  margin-bottom: 5px;">
                                <tr>
                                    <td class="">Phí</td>
                                    <td class="pr-3 text-right" style="text-align: right; padding-right: 20px;">0.0
                                        VND
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">Phí</td>
                                    <td class="pr-3 text-right" style="text-align: right; padding-right: 20px;">0.0
                                        VND
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">Phí</td>
                                    <td class="pr-3 text-right" style="text-align: right; padding-right: 20px;">0.0
                                        VND
                                    </td>
                                </tr>
                                <tr style="font-size: 18px;">
                                    <td><b>Tổng cộng</b></td>
                                    <td class="pr-3 text-right" style="text-align: right; padding-right: 20px;">
                                        <b>{{ number_format($ticket->total_price, 0, ',', '.') }} VND</b></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2 mb-4" style="margin-top: 15px; margin-bottom: 25px;">
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

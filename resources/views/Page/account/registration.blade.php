<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
    <title>ARS.CODEDY</title>
    <link rel="shortcut icon" type="image/x-icon" href="source/images/favicon.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travello template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/my_styles.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>


<div class="container">
    <div class="content_main">
            <div class="card bg-light">
                    <h4>Bạn đã sẵn sàng tham gia chương trình ARS Club? Nào, hãy bắt đầu!</h4>
                    <p>Chúng tôi cần một vài thông tin chi tiết về bạn để tạo tài khoản hội viên</p>
                    <form action="Register.php" method="post">
                         <h4 class="name">Tên tài khoản</h4>
                         <input type="text" class="user" name="username" placeholder="Tên tài khoản"><br>

                        <h4 class="name">Mật khẩu</h4>
                         <input type="password" class="pw" name="password" placeholder="Mật khẩu mới"><br>

                        <div id="name">
                         <h4 class="name">Họ và tên</h4>
                         <input type="text" class="firstlabel" name="first_name" placeholder="Họ"><input type="text" class="lastlabel" name="last_name" placeholder="Tên"><br>
                        </div>

                         <h4 class="name">Giới tính</h4>
                        <div class="gender">
                         <input type="radio" class="male" name="gender" value="male" checked> Nam
                         <input type="radio" class="female" name="gender" value="female"> Nữ
                        </div>

                         <h4 class="name">Sinh nhật</h4>
                         <input type="date" class="date" name="dateofbirth" placeholder="Sinh nhật DD/MM/YYYY">

                        <h4 class="name">Email</h4>
                         <input type="email" class="email" name="email" placeholder="Email">

                        <h4 class="name">Địa chỉ</h4>
                         <input type="text" class="address" name="addresss" placeholder="Địa chỉ">

                        <h4 class="name">Số điện thoại</h4>
                          <input type="tel" class="phone" name="phone" placeholder="Số điện thoại">

                         <div class="form-group">
                            <button class="btn" name="button">Đăng kí</button>
                         </div>
                    </form>
            </div>
        </div>
    </div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('plugins/Isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('plugins/scrollTo/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('plugins/easing/easing.js') }}"></script>
<script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>

{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>Login</title>--}}
{{--    <!-- CSS only -->--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/my_styles.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">--}}
{{--    <link rel="shortcut icon" type="image/x-icon" href="source/images/favicon.ico">--}}
{{--    style--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="main">--}}
{{--    <div class="login">--}}
{{--        <div class="logo">--}}
{{--            <div class="media-body">--}}
{{--                <h5>ARS.CODEDY</h5> <span>airline</span>--}}
{{--            </div>--}}
{{--            <div class="icon">--}}
{{--                <img class ="logo"src="{{ asset('source/images/iconfight.png') }}" style="width: 40px;height: 40px" alt="Generic placeholder image">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="title">--}}
{{--            <h4> Welcome to ars.codedy airline</h4>--}}
{{--        </div>--}}
{{--        <div class="login-body">--}}
{{--                <form action="" rep>--}}
{{--                <div class="user">--}}
{{--                    <input type="text" name="username" placeholder="Số hộ viên/Email">--}}
{{--                </div>--}}
{{--                <div class="password">--}}
{{--                    <input type="text" name="password" placeholder="Mật khẩu" >--}}
{{--                </div>--}}
{{--                <div class="check d-flex mt-4">--}}
{{--                    <div class="custom-control mr-5 custom-checkbox">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>--}}
{{--                        <label class="custom-control-label" for="defaultChecked2">Remember me</label>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <a href="#" class="txt3 ml-3">--}}
{{--                            Quên mật khẩu--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="submit-form w-100 mt-3 text-center container-login100-form-btn">--}}
{{--                    <button type="button" class="btn ">Primary</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>--}}
{{--</body>--}}
{{--</html>--}}

{{--@extends('master')--}}
{{--@section('style')--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/destinations.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/destinations_responsive.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/my_styles') }}">--}}
{{--@endsection--}}
{{--@section('Content')--}}
{{--    <div class="home page_ticket" style="height: 800px">--}}

{{--        <div class="background_image " style="background-image:url({{ asset('/source/images/destinations.jpg') }})"></div>--}}
{{--        <div class="content_main">--}}
{{--            <div class="card bg-light">--}}
{{--                <h4>Bạn đã sẵn sàng tham gia chương trình ARS Club? Nào, hãy bắt đầu!</h4>--}}
{{--                <p>Chúng tôi cần một vài thông tin chi tiết về bạn để tạo tài khoản hội viên</p>--}}
{{--                <form action="Register.php" method="post">--}}
{{--                    <h4 class="name">Tên tài khoản</h4>--}}
{{--                    <input type="text" class="user" name="username" placeholder="Tên tài khoản"><br>--}}

{{--                    <h4 class="name">Mật khẩu</h4>--}}
{{--                    <input type="password" class="pw" name="password" placeholder="Mật khẩu mới"><br>--}}

{{--                    <div id="name">--}}
{{--                        <h4 class="name">Họ và tên</h4>--}}
{{--                        <input type="text" class="firstlabel" name="first_name" placeholder="Họ"><input type="text" class="lastlabel" name="last_name" placeholder="Tên"><br>--}}
{{--                    </div>--}}

{{--                    <h4 class="name">Giới tính</h4>--}}
{{--                    <div class="gender">--}}
{{--                        <input type="radio" class="male" name="gender" value="male" checked> Nam--}}
{{--                        <input type="radio" class="female" name="gender" value="female"> Nữ--}}
{{--                    </div>--}}

{{--                    <h4 class="name">Sinh nhật</h4>--}}
{{--                    <input type="date" class="date" name="dateofbirth" placeholder="Sinh nhật DD/MM/YYYY">--}}

{{--                    <h4 class="name">Email</h4>--}}
{{--                    <input type="email" class="email" name="email" placeholder="Email">--}}

{{--                    <h4 class="name">Địa chỉ</h4>--}}
{{--                    <input type="text" class="address" name="addresss" placeholder="Địa chỉ">--}}

{{--                    <h4 class="name">Số điện thoại</h4>--}}
{{--                    <input type="tel" class="phone" name="phone" placeholder="Số điện thoại">--}}

{{--                    <div class="form-group">--}}
{{--                        <button class="btn" name="button">Đăng kí</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--@endsection--}}
{{--@section('script')--}}
{{--    <script type="text/javascript" src="{{ asset('js/destinations.js') }}"></script>--}}
{{--@endsection--}}

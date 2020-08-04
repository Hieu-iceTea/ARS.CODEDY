<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/my_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="source/images/favicon.ico">
</head>
<body>
<div id="main">
    <div class="login">
        <div class="logo">
            <div class="media-body">
                <h5>ARS.CODEDY</h5> <span>airline</span>
            </div>
            <div class="icon">
                <img class ="logo"src="{{ asset('source/images/iconfight.png') }}" style="width: 40px;height: 40px" alt="Generic placeholder image">
            </div>
        </div>
        <div class="title">
            <h4> Welcome to ars.codedy airline</h4>
        </div>
        <div class="login-body">
                <form action="" rep>
                <div class="user">
                    <input type="text" name="username" placeholder="Số hộ viên/Email">
                </div>
                <div class="password">
                    <input type="text" name="password" placeholder="Mật khẩu" >
                </div>
                <div class="check d-flex mt-4">
                    <div class="custom-control mr-5 custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>
                        <label class="custom-control-label" for="defaultChecked2">Remember me</label>
                    </div>
                    <div>
                        <a href="#" class="txt3 ml-3">
                            Quên mật khẩu
                        </a>
                    </div>
                </div>
                <div class="submit-form w-100 mt-3 text-center container-login100-form-btn">
                    <button type="button" class="btn ">Primary</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

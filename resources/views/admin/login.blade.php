<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Login | ARS.Admin</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="ARS.CODEDY HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="./main.css" rel="stylesheet">
    <link href="./my_style.css" rel="stylesheet">
</head>

<body>

@include('errors.all')
@include('notifications.all')

<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100 bg-plum-plate bg-animation">
            <div class="d-flex h-100 justify-content-center align-items-center">
                <div class="mx-auto app-login-box col-md-8">
                    <div class="app-logo-inverse mx-auto mb-3"></div>
                    <div class="modal-dialog w-100 mx-auto">

                        <form method="post">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Welcome back,</div>
                                            <span>Please sign in to your account below.</span>
                                        </h4>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <input name="user_name" id="user_name" placeholder="User name here..."
                                                       type="text" value="{{ old('user_name') }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <input name="password" id="password"
                                                       placeholder="Password here..." type="password"
                                                       value="{{ old('password') }}"
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative form-check">
                                        <input name="remember" id="remember" value=true type="checkbox"
                                               class="form-check-input">
                                        <label for="remember" class="form-check-label">Keep me logged in</label>
                                    </div>

                                    <div class="divider"></div>
                                    <h6 class="mb-0">No account?
                                        <a href="javascript:void(0);" class="text-primary">Contact admin to sign up.</a>
                                    </h6>
                                </div>
                                <div class="modal-footer clearfix">
                                    <div class="float-left">
                                        <a href="javascript:void(0);" class="btn-lg btn btn-link">Recover Password</a>
                                    </div>
                                    <div class="float-right">
                                        <button class="btn-hover-shine btn btn-primary btn-lg">Login to Dashboard
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="text-center text-white opacity-8 mt-3">Copyright © ARS.CODEDY 2020-08</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mượn tạm đống JS này để hiện thị modal -->
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script type="text/javascript" src="./assets/scripts/my_script.js"></script>

</body>

</html>

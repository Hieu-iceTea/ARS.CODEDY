<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>@yield('title') | ARS.Admin</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="./main.css" rel="stylesheet">
    <link href="./my_style.css" rel="stylesheet">
</head>

<body>

@include('notifications.all')
@include('errors.all')

<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">

    {{-- app-header --}}
    @include('admin.layout.components.header')

    {{-- ui-theme-settings --}}
    @include('admin.layout.components.ui-theme-settings')

    <div class="app-main">

        {{-- sidebar --}}
        @include('admin.layout.components.sidebar')

        <div class="app-main__outer">

            {{-- main --}}
            @yield('main')

            {{-- footer --}}
            @include('admin.layout.components.footer')

        </div>

    </div>
</div>

{{-- app-drawer --}}
@include('admin.layout.components.app-drawer')

<!-- Mượn tạm đống JS này để hiện thị modal -->
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript" src="./assets/scripts/main.js"></script>

<script type="text/javascript" src="./assets/scripts/my_script.js"></script>
</body>

</html>

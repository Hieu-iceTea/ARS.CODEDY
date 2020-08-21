<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>@yield('title') | ARS.Admin</title>
    <link rel="shortcut icon" type="image/gif" href="{{ asset('img/favicon.gif') }}">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="ARS.CODEDY">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="./main.css" rel="stylesheet">
    <link href="./my_style.css" rel="stylesheet">
</head>

<body>

@include('notifications.all')
@include('errors.all')

<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    {{-- app-header --}}
    @include('admin.layout.components.header')

    {{-- ui-theme-settings --}}
    @include('admin.layout.components.ui-theme-settings')

    <div class="app-main">
        {{-- app-sidebar --}}
        @include('admin.layout.components.sidebar')

        {{-- main --}}
        @yield('main')

        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    </div>
</div>
<script type="text/javascript" src="./assets/scripts/main.js"></script>

<!-- Mượn tạm đống JS của front-end này để hiện thị modal -->
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap4.min.js"></script>

<script type="text/javascript" src="./assets/scripts/my_script.js"></script>
</body>

</html>

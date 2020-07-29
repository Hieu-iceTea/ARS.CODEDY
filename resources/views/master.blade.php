<!DOCTYPE html>
<html lang="en">
<head>
    <title>Travello</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travello template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="source/styles/bootstrap4/bootstrap.min.css">
    <link href="source/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="source/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="source/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="source/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="source/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="source/styles/responsive.css">
</head>
<body>

<div class="super_container">

    <!--Header-->
    @include('Header')

    <!-- Content Home -->
    @yield('Content')

    <!-- Footer -->
    @include('Footer')
</div>

<script src="source/js/jquery-3.2.1.min.js"></script>
<script src="source/styles/bootstrap4/popper.js"></script>
<script src="source/styles/bootstrap4/bootstrap.min.js"></script>
<script src="source/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="source/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="source/plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="source/plugins/easing/easing.js"></script>
<script src="source/plugins/parallax-js-master/parallax.min.js"></script>
<script src="source/js/custom.js"></script>
</body>
</html>

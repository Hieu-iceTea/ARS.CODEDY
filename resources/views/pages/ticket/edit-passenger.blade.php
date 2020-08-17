@extends('pages.layout.master')

@section('title', 'Edit Passenger')

<!-- Style Main_style-->
@section('style')
    <link rel="stylesheet" type="text/css" href="css/main_styles.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/my_styles">
@endsection

<!-- Content Home -->
@section('Content')
    <!-- Home Background Header-->
    <div class="home page_ticket" style="height: 586px">

        <div class="background_image" style="background-image:url(img/destinations.jpg)"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_title"><h2>Customer information </h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="tiket_detail">
        <div class="container">
            <div class="row my-5">
                <div class="card w-100">
                    <h5 class="card-header title_card">Passenger <span>(Adults)</span></h5>
                    <input type="hidden" name="" value=1>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div>Gender *</div>
                                <div class="input-group">
                                    <select name="" class="custom-select"
                                            aria-label="select with button addon">
                                        <option value="" selected>-- Gender --</option>
                                        <option value="1">Male</option>
                                        <option value="2">female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-5">
                                <div>Middle and First/Given name *</div>
                                <div class="input-group">
                                    <input name="" type="text"
                                           class="form-control"
                                           placeholder="Middle and First/Given name"
                                           aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-4">
                                <div>Last/Family Name *</div>
                                <div class="input-group">
                                    <input name="" type="text"
                                           class="form-control"
                                           placeholder="Last/Family Name"
                                           aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p class="ml-3" style="font-size: 80%">
                                Please enter your full name as it appears on your passport.
                            </p>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <div>Date of birth *</div>
                                <div class="input-group">
                                    <input name="" type="date"
                                           class="form-control w-75"
                                           placeholder="Departure">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
{{--            children--}}
            <div class="row my-5">
                <div class="card w-100">
                    <h5 class="card-header title_card">Passenger  <span>(Children)</span></h5>
                    <input type="hidden" name="" value=2>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div>Gender *</div>
                                <div class="input-group">
                                    <select name=" class="custom-select"
                                            aria-label="select with button addon">
                                        <option value="" selected>-- Gender --</option>
                                        <option value="1">Male</option>
                                        <option value="2">female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-5">
                                <div>Middle and First/Given name *</div>
                                <div class="input-group">
                                    <input name="" type="text"
                                           class="form-control"
                                           placeholder="Middle and First/Given name"
                                           aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-4">
                                <div>Last/Family Name *</div>
                                <div class="input-group">
                                    <input name="" type="text"
                                           class="form-control"
                                           placeholder="Last/Family Name"
                                           aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p class="ml-3" style="font-size: 80%">
                                Please enter your full name as it appears on your passport.
                            </p>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <div>Date of birth *</div>
                                <div class="input-group">
                                    <input name="" type="date"
                                           class="form-control w-75"
                                           placeholder="Departure">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
{{--            infant--}}
            <div class="row mt-4">
                <div class="card w-100">
                    <h5 class="card-header title_card">Passenger  <span>(Infant)</span></h5>
                    <input type="hidden" name="" value=3>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div>Gender *</div>
                                <div class="input-group">
                                    <select name="" class="custom-select"
                                            aria-label="select with button addon">
                                        <option value="" selected>-- Gender --</option>
                                        <option value="1">Male</option>
                                        <option value="2">female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-5">
                                <div>Middle and First/Given name *</div>
                                <div class="input-group">
                                    <input name="" type="text"
                                           class="form-control"
                                           placeholder="Middle and First/Given name"
                                           aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-4">
                                <div>Last/Family Name *</div>
                                <div class="input-group">
                                    <input name="" type="text"
                                           class="form-control"
                                           placeholder="Last/Family Name"
                                           aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p class="ml-3" style="font-size: 80%">
                                Please enter your full name as it appears on your passport.
                            </p>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <div>Date of birth *</div>
                                <div class="input-group">
                                    <input name="" type="date"
                                           class="form-control w-75"
                                           placeholder="Departure">
                                </div>
                            </div>
                            <div class="col-8">
                                <div>Come with the passengers</div>
                                <div class="input-group">
                                    <input name="" type="text"
                                           class="form-control"
                                           placeholder=""
                                           aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" my-3 ml-auto">
                    <a href=""
                       class="btn btn-outline-primary tiket_detail_continue position-sticky continue" style="width: 150px">
                        <span><i class="fa fa-angle-left"></i></span>
                        Cancel
                    </a>
                    <a href=""
                       class="btn btn-outline-primary tiket_detail_continue position-sticky continue ml-3" style="width: 150px">
                        Save
                        <span><i class="fa fa-angle-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="js/custom.js"></script>
@endsection

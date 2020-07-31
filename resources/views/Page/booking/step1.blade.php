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
                <div class="col-sm-3">
                    <p class="bg-primary">
                        <span class="badge badge-light">4</span> Notifications
                    </p>
                </div>
                <div class="col-sm-3">
                    <p class="bg-light">
                        <span class="badge badge-light">4</span> Notifications
                    </p>
                </div>
                <div class="col-sm-3">
                    <p class="bg-light">
                        <span class="badge badge-light">4</span> Notifications
                    </p>
                </div>
                <div class="col-sm-3">
                    <p class="bg-light">
                        <span class="badge badge-light">4</span> Notifications
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-8">
                    <div class="row">
                        <div class="media">
                            <img class="mr-3" src="../source/images/iconfight.png" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">Media heading</h5>
                                Cras sit amet nibh libero,
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col  bg-primary text-white">
                            <p>  Cras sit amet nibh libero,</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-3"></div>
                        <div class="col-3">col 3</div>
                        <div class="col-3">col 3</div>
                        <div class="col-3">col 3</div>
                    </div>
                    <div class="row mt-1 mr-3">
                        <div class="col-3">
                            <h5 class="display-5">Fluid jumbotron</h5>
                        </div>
                        <div class="col-3 " ><img src="https://via.placeholder.com/150" alt=""></div>
                        <div class="col-3"><img src="https://via.placeholder.com/150" alt=""></div>
                        <div class="col-3"><img src="https://via.placeholder.com/150" alt=""></div>
                    </div>
                    <div class="row mt-1 mr-3">
                        <div class="col-3">
                            <h5 class="display-5">Fluid jumbotron</h5>
                        </div>
                        <div class="col-3 " ><img src="https://via.placeholder.com/150" alt=""></div>
                        <div class="col-3"><img src="https://via.placeholder.com/150" alt=""></div>
                        <div class="col-3"><img src="https://via.placeholder.com/150" alt=""></div>
                    </div>
                    <div class="row mt-1 mr-3">
                        <div class="col-3">
                            <h5 class="display-5">Fluid jumbotron</h5>
                        </div>
                        <div class="col-3 " ><img src="https://via.placeholder.com/150" alt=""></div>
                        <div class="col-3"><img src="https://via.placeholder.com/150" alt=""></div>
                        <div class="col-3"><img src="https://via.placeholder.com/150" alt=""></div>
                    </div>
                    <div class="row mt-1 mr-3">
                        <div class="col-3">
                            <h5 class="display-5">Fluid jumbotron</h5>
                        </div>
                        <div class="col-3 " ><img src="https://via.placeholder.com/150" alt=""></div>
                        <div class="col-3"><img src="https://via.placeholder.com/150" alt=""></div>
                        <div class="col-3"><img src="https://via.placeholder.com/150" alt=""></div>
                    </div>
                    <div class="row mt-1 mr-3">
                        <div class="col-3">
                            <h5 class="display-5">Fluid jumbotron</h5>
                        </div>
                        <div class="col-3 " ><img src="https://via.placeholder.com/150" alt=""></div>
                        <div class="col-3"><img src="https://via.placeholder.com/150" alt=""></div>
                        <div class="col-3"><img src="https://via.placeholder.com/150" alt=""></div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card  w-100"  style="width: 18rem;">
                        <img class="card-img-top" src="https://via.placeholder.com/250" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card mt-3  w-100" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                    <div class="card mt-3  w-100" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>

                    <button type="button" class="btn btn-success mt-3 w-100">Success</button>
                </div>
            </div>

        </div>
    </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
@endsection

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

            <form action="" method="post">
                {{--item--}}
                @foreach($passengers as $key => $passenger)
                    <input type="hidden" name="passengers[{{ $key }}][passenger_id]" value="{{$passenger->passenger_id}}">
                    <input type="hidden" name="passengers[{{ $key }}][passenger_type]" value="{{$passenger->passenger_type}}">
                    <div class="row mt-4">
                        <div class="card w-100">
                            <h5 class="card-header title_card">Passenger <span>
                            @if($passenger->passenger_type==1)
                                        (Adults)
                                    @endif
                                    @if($passenger->passenger_type==2)
                                        (Childent)
                                    @endif
                                    @if($passenger->passenger_type==3)
                                        (Baby)
                                    @endif
                                    </span></h5>
                            <input type="hidden" name="" value=3>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div>Gender *</div>
                                        <div class="input-group">
                                            <select name="passengers[{{ $key }}][gender]" class="custom-select"
                                                    aria-label="select with button addon">
                                                <option>-- Gender --</option>
                                                <option value="1" @if($passenger->gender == 1) selected @endif>Male
                                                </option>
                                                <option value="2" {{ $passenger->gender == 2 ? 'selected' : '' }}>Female
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div>Middle and First/Given name *</div>
                                        <div class="input-group">
                                            <input name="passengers[{{ $key }}][first_name]" type="text" value="{{$passenger->first_name}}"
                                                   class="form-control"
                                                   placeholder="Middle and First/Given name"
                                                   aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>Last/Family Name *</div>
                                        <div class="input-group">
                                            <input name="passengers[{{ $key }}][last_name]" type="text" value="{{$passenger->last_name}}"
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
                                            <input name="passengers[{{ $key }}][dob]" type="date" value="{{$passenger->dob}}"
                                                   class="form-control w-75"
                                                   placeholder="Departure">
                                        </div>
                                    </div>
                                    @if($passenger->passenger_type==3)
                                        <div class="col-8">
                                            <div>Come with the passengers</div>
                                            <div class="input-group">
                                                <input name="passengers[{{ $key }}][with_passenger]" type="text" value="{{$passenger->with_passenger}}"
                                                       class="form-control"
                                                       placeholder=""
                                                       aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="row">
                    <div class=" my-3 ml-auto">
                        <button type="submit"
                                class="btn mt-3 w-100 position-sticky continue btn-outline-primary tiket_detail_continue position-sticky continue">
                            Cancel <span><i class="fa fa-angle-left"></i></span>
                        </button>
                        <button type="submit"
                                class="btn mt-3 w-100 position-sticky continue btn-outline-primary tiket_detail_continue position-sticky continue">
                            Save <span><i class="fa fa-angle-right"></i></span>
                        </button>
                    </div>
                </div>
                @csrf
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="js/custom.js"></script>
@endsection

@extends('admin.layout.master')

@section('title', 'Show Flight Schedule Details')

@section('main')

    <div class="app-main__inner">

        <form method="post">
            @csrf

            <div class="app-page-title">
                <div class="page-title-wrapper">

                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-plane icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Flight Schedule Management
                            | Show Details
                            <div class="page-title-subheading">
                                View, create, update, delete and activate flight schedule.
                            </div>
                        </div>
                    </div>

                    <div class="page-title-actions">
                        <a href="flight-schedule/create" data-toggle="tooltip" title="Add new flight schedule"
                           data-placement="bottom"
                           class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-plus fa-w-20"></i>
                                </span>
                            New Flight Schedule
                        </a>
                    </div>

                </div>
            </div>

            @include('admin.components.nav-tab-btn', ['urlMain' => '/admin/flight-schedule'])

            <div class="row">
                <div class="col">
                    <div class="main-card mb-3 card">
                        <div class="card-header">
                            <i class="fa fa-plane pr-2"></i>
                            Schedule, airport, plane.
                        </div>

                        <div class="card-body display_data">

                            <div class="position-relative row form-group">
                                <label for="airport_from_id" class="col-md-3 text-md-right col-form-label">Airport
                                    from</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ $flightSchedule->airportFrom->location }}
                                        ({{ $flightSchedule->airportFrom->code }})</p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="airport_to_id"
                                       class="col-md-3 text-md-right col-form-label">Airport to</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ $flightSchedule->airportTo->location }}
                                        ({{ $flightSchedule->airportTo->code }})</p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="plane_id" class="col-md-3 text-md-right col-form-label">Plane</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ $flightSchedule->plane->name }}</p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="code" class="col-md-3 text-md-right col-form-label">Code</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ $flightSchedule->code }}</p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="departure_at"
                                       class="col-md-3 text-md-right col-form-label">Departure at</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ date('H:i d/m/Y', strtotime($flightSchedule->departure_at)) }}</p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="arrival_at" class="col-md-3 text-md-right col-form-label">Arrival at</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ date('H:i d/m/Y', strtotime($flightSchedule->arrival_at)) }}</p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="status" class="col-md-3 text-md-right col-form-label">Status</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>
                                    <div
                                        class="badge badge-{{ \App\Utilities\Utility::$flight_schedule_status_badge[$flightSchedule->status] }} opacity-9 mt-2">
                                        {{ \App\Utilities\Utility::$flight_schedule_status[$flightSchedule->status] }}
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="description"
                                       class="col-md-3 text-md-right col-form-label">Description</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{!! $flightSchedule->description !!}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12 col-xl-5 col-xxl-4">
                    <div class="main-card mb-3 card">
                        <div class="card-header">
                            <i class="fa fa-gem pr-2"></i>
                            Price of seat types.
                        </div>

                        <div class="card-body display_data">

                            {{-- Eco --}}
                            <h5 class="card-title">Eco</h5>

                            <div class="position-relative row form-group">
                                <label for="eco_price" class="col-md-4 text-md-right col-form-label">Price</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>
                                        {{ number_format($flightSchedule->priceSeatType->eco_price, 0, ',', '.') }}
                                        ₫
                                    </p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="eco_qty_remain"
                                       class="col-md-4 text-md-right col-form-label">Qty</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ $flightSchedule->priceSeatType->eco_qty_remain . '/' . $flightSchedule->priceSeatType->eco_qty_total}}</p>
                                </div>
                            </div>

                            <hr>

                            {{-- Plus --}}
                            <h5 class="card-title">Plus</h5>

                            <div class="position-relative row form-group">
                                <label for="plus_price" class="col-md-4 text-md-right col-form-label">Price</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>
                                        {{ number_format($flightSchedule->priceSeatType->plus_price, 0, ',', '.') }}
                                        ₫
                                    </p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="plus_qty_remain"
                                       class="col-md-4 text-md-right col-form-label">Qty remain</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ $flightSchedule->priceSeatType->plus_qty_remain . '/' . $flightSchedule->priceSeatType->plus_qty_total}}</p>
                                </div>
                            </div>

                            <hr>

                            {{-- Business --}}
                            <h5 class="card-title">Business</h5>

                            <div class="position-relative row form-group">
                                <label for="business_price" class="col-md-4 text-md-right col-form-label">Price</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>
                                        {{ number_format($flightSchedule->priceSeatType->business_price, 0, ',', '.') }}
                                        ₫
                                    </p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="business_qty_remain" class="col-md-4 text-md-right col-form-label">Qty
                                    remain</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ $flightSchedule->priceSeatType->business_qty_remain . '/' . $flightSchedule->priceSeatType->business_qty_total}}</p>
                                </div>
                            </div>

                            <hr>

                            {{-- Total seat --}}
                            <h5 class="card-title mb-0">
                                Total seat available:
                                {{ ($flightSchedule->priceSeatType->eco_qty_remain + $flightSchedule->priceSeatType->plus_qty_remain + $flightSchedule->priceSeatType->business_qty_remain) . '/' . ($flightSchedule->priceSeatType->eco_qty_total + $flightSchedule->priceSeatType->plus_qty_total + $flightSchedule->priceSeatType->business_qty_total) }}
                            </h5>

                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>

@endsection

@extends('admin.layout.master')

@section('title', 'Show Plane Detail')

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
                <div class="col-lg-6 mx-auto">
                    <div class="main-card mb-3 pb-6 card">
                        <div class="card-header">
                            <i class="fa fa-plane pr-2"></i>
                            Plane.
                        </div>

                        <div class="card-body display_data">

                            <div class="position-relative row form-group">
                                <label for="airport_from_id" class="col-md-3 text-md-right col-form-label">Code
                                    Plane</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ $getDataPlane->code }}</p>
                                </div>
                            </div>

                            <div class="position-relative pb-5  row form-group">
                                <label for="airport_to_id"
                                       class="col-md-3 text-md-right col-form-label">Name Plane</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ $getDataPlane->name }}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>

@endsection

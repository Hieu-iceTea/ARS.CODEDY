@extends('admin.layout.master')

@section('title', 'Show Extra Service Details')

@section('main')

    <div class="app-main__inner">

        <div class="app-page-title">
            <div class="page-title-wrapper">

                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-users icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Extra Service Management | Show Details
                        <div class="page-title-subheading">
                            View, create, update, delete and manage extra service.
                        </div>
                    </div>
                </div>

                <div class="page-title-actions">
                    <a href="extra-service/create" data-toggle="tooltip" title="Add new pay-type" data-placement="bottom"
                       class="btn-shadow mr-3 btn btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus fa-w-20"></i>
                                    </span>
                        New Extra Service
                    </a>
                </div>

            </div>
        </div>

        @include('admin.components.nav-tab-btn', ['urlMain' => '/admin/extra-service'])

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body display_data">
                        {{--image--}}
                        <div class="position-relative row form-group">
                            <label for="name"
                                   class="col-md-3 text-md-right col-form-label">Image</label>
                            <div class="col-md-9 col-xl-8">
                                <img src="../img/extra_service/{{ $extra_service->image }}" alt="" height=100>
                            </div>
                        </div>
                        {{--name--}}
                        <div class="position-relative row form-group">
                            <label for="name"
                                   class="col-md-3 text-md-right col-form-label">Name</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{!! $extra_service->name !!}</p>
                            </div>
                        </div>
                        {{--price--}}
                        <div class="position-relative row form-group">
                            <label for="name"
                                   class="col-md-3 text-md-right col-form-label">Price</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{ number_format($extra_service->price, 0, ',', '.') }} ₫</p>
                            </div>
                        </div>
                        {{--Active--}}
                        <div class="position-relative row form-group">
                            <label for="active" class="col-md-3 text-md-right col-form-label">Active</label>
                            <div class="col-md-9 col-xl-8">
                                <p>
                                <div
                                    class="badge badge-{{ $extra_service->active == 1 ? 'success' : 'warning' }} mt-2">
                                    {{ $extra_service->active == 1 ? 'Active' : 'Inactive' }}
                                </div>
                                </p>
                            </div>
                        </div>
                        {{--Description--}}
                        <div class="position-relative row form-group">
                            <label for="description"
                                   class="col-md-3 text-md-right col-form-label">Description</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{!! $extra_service->description !!}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

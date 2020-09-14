@extends('admin.layout.master')

@section('title', 'Show Pay Type Details')

@section('main')

    <div class="app-main__inner">

        <div class="app-page-title">
            <div class="page-title-wrapper">

                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-users icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Pay Type Management | Show Details
                        <div class="page-title-subheading">
                            View, create, update, delete and manage pay type.
                        </div>
                    </div>
                </div>

                <div class="page-title-actions">
                    <a href="pay-type/create" data-toggle="tooltip" title="Add new pay-type" data-placement="bottom"
                       class="btn-shadow mr-3 btn btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus fa-w-20"></i>
                                    </span>
                        New Pay Type
                    </a>
                </div>

            </div>
        </div>

        @include('admin.components.nav-tab-btn', ['urlMain' => '/admin/pay-type'])

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body display_data">
                        {{--image--}}
                        <div class="position-relative row form-group">
                            <label for="name"
                                   class="col-md-3 text-md-right col-form-label">Logo</label>
                            <div class="col-md-9 col-xl-8">
                                <img src="../img/pay_type/{{ $pay_type->image }}" alt="" style="height: 100px;">
                            </div>
                        </div>
                        {{--name--}}
                        <div class="position-relative row form-group">
                            <label for="name"
                                   class="col-md-3 text-md-right col-form-label">Name</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{!! $pay_type->name !!}</p>
                            </div>
                        </div>
                        {{--Active--}}
                        <div class="position-relative row form-group">
                            <label for="active" class="col-md-3 text-md-right col-form-label">Active</label>
                            <div class="col-md-9 col-xl-8">
                                <p>
                                <div
                                    class="badge badge-{{ $pay_type->active == 1 ? 'success' : 'warning' }} mt-2">
                                    {{ $pay_type->active == 1 ? 'Active' : 'Inactive' }}
                                </div>
                                </p>
                            </div>
                        </div>
                        {{--Description--}}
                        <div class="position-relative row form-group">
                            <label for="description"
                                   class="col-md-3 text-md-right col-form-label">Description</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{!! $pay_type->description !!}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

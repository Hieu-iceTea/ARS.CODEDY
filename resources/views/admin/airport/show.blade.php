@extends('admin.layout.master')

@section('title', 'Show Airport Details')

@section('main')

    <div class="app-main__inner">

        <div class="app-page-title">
            <div class="page-title-wrapper">

                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-users icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Airport Management | Show Details
                        <div class="page-title-subheading">
                            View, create, update, delete and manage airport.
                        </div>
                    </div>
                </div>

                <div class="page-title-actions">
                    <a href="airport/create" data-toggle="tooltip" title="Add new airport" data-placement="bottom"
                       class="btn-shadow mr-3 btn btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus fa-w-20"></i>
                                    </span>
                        New Airport
                    </a>
                </div>

            </div>
        </div>

        @include('admin.components.nav-tab-btn', ['urlMain' => '/admin/airport'])

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body display_data">
                        {{--image--}}
                        <div class="position-relative row form-group">
                            <label for="name"
                                   class="col-md-3 text-md-right col-form-label">Image</label>
                            <div class="col-md-9 col-xl-8">
                                <img src="../img/airport/{{ $airport->image }}" alt="" style="height: 200px;">
                            </div>
                        </div>
                        {{--location--}}
                        <div class="position-relative row form-group">
                            <label for="location"
                                   class="col-md-3 text-md-right col-form-label">Location</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{!! $airport->location !!}</p>
                            </div>
                        </div>
                        {{--code--}}
                        <div class="position-relative row form-group">
                            <label for="code"
                                   class="col-md-3 text-md-right col-form-label">Code</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{!! $airport->code !!}</p>
                            </div>
                        </div>
                        {{--name--}}
                        <div class="position-relative row form-group">
                            <label for="name"
                                   class="col-md-3 text-md-right col-form-label">Name</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{!! $airport->name !!}</p>
                            </div>
                        </div>
                        {{--Active--}}
                        <div class="position-relative row form-group">
                            <label for="active" class="col-md-3 text-md-right col-form-label">Active</label>
                            <div class="col-md-9 col-xl-8">
                                <p>
                                <div
                                    class="badge badge-{{ $airport->active == 1 ? 'success' : 'warning' }} mt-2">
                                    {{ $airport->active == 1 ? 'Active' : 'Inactive' }}
                                </div>
                                </p>
                            </div>
                        </div>
                        {{--Description--}}
                        <div class="position-relative row form-group">
                            <label for="description"
                                   class="col-md-3 text-md-right col-form-label">Description</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{!! $airport->description !!}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@extends('admin.layout.master')

@section('title', request()->segment(3) == 'create' ? 'Create Plane' : 'Edit Plane')

@section('main')
    <div class="app-main__inner">

        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="app-page-title">
                <div class="page-title-wrapper">

                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-users icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Plane Management
                            <div class="page-title-subheading">
                                View, create, update, delete, and create Plane.
                            </div>
                        </div>
                    </div>

                    <div class="page-title-actions">
                        <a href="{{ url()->current() . '/create'}}"
                           class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus fa-w-20"></i>
                                    </span>
                            New Plane
                        </a>
                    </div>

                </div>
            </div>

            @include('admin.components.nav-tab-btn', ['urlMain' => '/admin/plane'])

            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            {{--Code--}}
                            <div class="position-relative row form-group">
                                <label for="user_name" class="col-md-3 text-md-right col-form-label">CODE</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="code_plane" id="name" placeholder="code"
                                           type="text" class="form-control "
                                           value="{{isset( $getDataPlane->code) ? $getDataPlane->code: ''}}">
                                </div>
                            </div>
                            {{--Name--}}
                            <div class="position-relative row form-group">
                                <label for="user_name" class="col-md-3 text-md-right col-form-label">Name</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="name_plane" id="name" placeholder="Name"
                                           type="text" class="form-control "
                                           value="{{ isset($getDataPlane->name) ? $getDataPlane->name :'' }}">
                                </div>
                            </div>
                            {{--Active--}}
                            <div class="position-relative row form-group">
                                <label for="active"
                                       class="col-md-3 text-md-right col-form-label">Active</label>
                                <div class="col-md-9 col-xl-8 mt-2">
                                    <input type="checkbox" value=1 name="active" id="active"
                                        {{ isset($getDataPlane->active) ?? ($getDataPlane->active  == 1)  ? 'checked' : '' }}
                                    >
                                </div>
                            </div>

                            {{--Description--}}
                            <div class="position-relative row form-group">
                                <label for="description"
                                       class="col-md-3 text-md-right col-form-label">Description</label>
                                <div class="col-md-9 col-xl-8">
                                    <textarea name="description" id="description">
                                       {!! old('description') ?? $getDataPlane->description ?? '' !!}
                                    </textarea>
                                </div>
                            </div>


                            {{-- Button submit --}}
                            <div class="position-relative row form-group mb-1">
                                <div class="col-md-9 col-xl-8 offset-md-2">
                                    <a href="{{ ( !str_contains(url()->current(), 'create') && str_contains(url()->previous(), '/admin/plane')) ? url()->previous() : '/admin/plane' }}"
                                       class="border-0 btn btn-outline-danger mr-1">
                                        <span class="btn-icon-wrapper pr-1 opacity-8">
                                            <i class="fa fa-times fa-w-20"></i>
                                        </span>
                                        <span>Cancel</span>
                                    </a>

                                    <button type="submit" class="btn-shadow btn-hover-shine btn btn-primary">
                                        <span class="btn-icon-wrapper pr-2 opacity-8">
                                            <i class="fa fa-download fa-w-20"></i>
                                        </span>
                                        <span>Save</span>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>

    {{-- ckeditor --}}
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
        // CKEDITOR.config.height = 100; //pixels wide.
    </script>

@endsection


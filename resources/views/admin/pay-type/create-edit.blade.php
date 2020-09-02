@extends('admin.layout.master')

@section('title', request()->segment(3) == 'create' ? 'Create Pay Type' : 'Edit Pay Type')

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
                        <div>Pay Type Management
                            <div class="page-title-subheading">
                                View, create, update, delete, and create pay type.
                            </div>
                        </div>
                    </div>

                    <div class="page-title-actions">
                        <a href="{{ url()->current() . '/create'}}"
                           class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
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
                        <div class="card-body">
                            {{--Name--}}
                            <div class="position-relative row form-group">
                                <label for="user_name" class="col-md-3 text-md-right col-form-label">Name</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="name_pay_type" id="name" placeholder="Name"
                                           type="text" class="form-control"
                                           value="">
                                </div>
                            </div>
                            {{--image--}}
                            <div class="position-relative row form-group">
                                <label for="image" class="col-md-3 text-md-right col-form-label">Logo</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="image" id="image" type="file"
                                           class="form-control-file">
                                </div>
                            </div>
                            {{--Active--}}
                            <div class="position-relative row form-group">
                                <label for="active" class="col-md-3 text-md-right col-form-label">Active</label>
                                <div class="col-md-9 col-xl-8">
                                    <select name="active" id="active" class="form-control">
                                        <option>-- Active --</option>
                                        <option
                                            value="0" {{ (old('active') ?? $pay_type->active ?? '') == 1 ? 'selected' : '' }}>
                                            Inactive
                                        </option>
                                        <option
                                            value="1" {{ (old('active') ?? $pay_type->active ?? '') == 2 ? 'selected' : '' }}>
                                            Active
                                        </option>
                                    </select>
                                </div>
                            </div>
                            {{--Description--}}
                            <div class="position-relative row form-group">
                                <label for="description"
                                       class="col-md-3 text-md-right col-form-label">Description</label>
                                <div class="col-md-9 col-xl-8">
                                    <textarea required name="description" id="description">
                                        {{ old('description') ?? $pay_type->description ?? '' }}
                                    </textarea>
                                </div>
                            </div>
                            {{-- Button submit --}}
                            <div class="position-relative row form-group mb-1">
                                <div class="col-md-9 col-xl-8 offset-md-2">
                                    <a href="{{ ( !str_contains(url()->current(), 'create') && str_contains(url()->previous(), '/admin/pay-type')) ? url()->previous() : '/admin/pay-type' }}"
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

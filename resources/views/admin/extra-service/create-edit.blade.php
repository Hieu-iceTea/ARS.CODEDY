@extends('admin.layout.master')

@section('title', request()->segment(3) == 'create' ? 'Create Extra Service' : 'Edit Extra Service')

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
                        <div>Extra Service Management
                            <div class="page-title-subheading">
                                View, create, update, delete, and create extra service.
                            </div>
                        </div>
                    </div>

                    <div class="page-title-actions">
                        <a href="extra-service/create" title="Add New Extra Service"
                           class="btn-shadow btn-hover-shine mr-3 btn btn-primary" >
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
                        <div class="card-body">
                            {{--image--}}
                            <div class="position-relative row form-group">
                                <label for="image" class="col-md-3 text-md-right col-form-label">Image</label>
                                <div class="col-md-9 col-xl-8">
                                    <img id="thumbnail" style="height: 200px;" class="" style="cursor: pointer"
                                         data-toggle="tooltip" title="Click to change the image" data-placement="bottom"
                                         src="{{ isset($extra_service->image) ? '../img/extra_service/' . $extra_service->image : '../img/icon/upload_select.png' }}"
                                         alt="Logo">
                                    <input name="image" id="image" type="file" onchange="changeImg(this)"
                                           class="form-control-file" style="display: none;"
                                           value="{{ old('image') ?? $extra_service->image ?? ''}}">
                                    <input type="hidden" name="image_old" value="{{ $extra_service->image ?? '' }}">
                                    <small class="form-text text-muted">
                                        {{ isset($extra_service->image) ? 'Look at it, it looks great! (Click on the image to change)' : 'No images, upload them! (Click on the image to change)' }}
                                    </small>
                                </div>
                            </div>
                            {{--Name--}}
                            <div class="position-relative row form-group">
                                <label for="user_name" class="col-md-3 text-md-right col-form-label">Name</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="name" id="name" placeholder="Name"
                                           type="text" class="form-control"
                                           value="{{ old('name') ?? $extra_service->name ?? '' }}">
                                </div>
                            </div>
                            {{--Price--}}
                            <div class="position-relative row form-group">
                                <label for="price" class="col-md-3 text-md-right col-form-label">Price</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="price" id="price" placeholder="0,00 VND"
                                           class="form-control input-mask-trigger"
                                           data-inputmask="'alias': 'numeric', 'nullable': false, 'rightAlign': true, 'groupSeparator': '.', 'radixPoint': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'suffix': ' ₫', 'placeholder': '0'"
                                           value="{{ old('price') ?? $extra_service->price ?? ''}}">
                                </div>
                            </div>
                            {{--Active--}}
                            <div class="position-relative row form-group">
                                <label for="active" class="col-md-3 text-md-right col-form-label">Active</label>
                                <div class="col-md-9 col-xl-8">
                                    <div class="position-relative form-check pt-sm-2">
                                        <input name="active" id="active" type="checkbox" value=1
                                               {{ (old('active') ?? $extra_service->active ?? '') == 1 ? 'checked' : '' }}
                                               class="form-check-input">
                                        <label for="active" class="form-check-label">Active</label>
                                    </div>
                                </div>
                            </div>
                            {{--Description--}}
                            <div class="position-relative row form-group">
                                <label for="description"
                                       class="col-md-3 text-md-right col-form-label">Description</label>
                                <div class="col-md-9 col-xl-8">
                                    <textarea required name="description" id="description">
                                        {{ old('description') ?? $extra_service->description ?? '' }}
                                    </textarea>
                                </div>
                            </div>
                            {{-- Button submit --}}
                            <div class="position-relative row form-group mb-1">
                                <div class="col-md-9 col-xl-8 offset-md-2">
                                    <a href="{{ ( !str_contains(url()->current(), 'create') && str_contains(url()->previous(), '/admin/extra-service')) ? url()->previous() : '/admin/extra-service' }}"
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
        /*CKEDITOR.replace('description');*/
        // CKEDITOR.config.height = 100; //pixels wide.
    </script>

    <script>
        /*CKEDITOR.replace('description', {
            filebrowserBrowseUrl: '../plugins/ckfinder_php_3.5.1.1/ckfinder.html',
            filebrowserUploadUrl: '../plugins/ckfinder_php_3.5.1.1/core/connector/php/connector.php?command=QuickUpload&type=Files'
        });*/

        CKEDITOR.replace('description', {
            filebrowserBrowseUrl: '../plugins/ckfinder_php_3.5.1.1/ckfinder.html',
            filebrowserImageBrowseUrl: '../plugins/ckfinder_php_3.5.1.1/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl: '../plugins/ckfinder_php_3.5.1.1/ckfinder.html?type=Flash',
            filebrowserUploadUrl: '../plugins/ckfinder_php_3.5.1.1/connector?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '../plugins/ckfinder_php_3.5.1.1/connector?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl: '../plugins/ckfinder_php_3.5.1.1/connector?command=QuickUpload&type=Flash'
        });

        //https://ckeditor.com/docs/ckfinder/ckfinder3/#!/guide/dev_ckeditor
    </script>

@endsection

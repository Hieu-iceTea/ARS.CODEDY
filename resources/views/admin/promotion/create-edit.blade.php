@extends('admin.layout.master')

@section('title', request()->segment(3) == 'create' ? 'Create Promotion' : 'Edit Promotion')

@section('main')

    <div class="app-main__inner">

        <form method="post">
            @csrf

            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-ticket icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Promotion Management
                            | {{ request()->segment(3) == 'create' ? 'Create Promotion' : 'Edit Promotion' }}
                            <div class="page-title-subheading">
                                View, create, update, delete and manage promotion.
                            </div>
                        </div>
                    </div>

                    <div class="page-title-actions">
                        <a href="promotion/create" data-toggle="tooltip"
                           class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-plus fa-w-20"></i>
                        </span>
                            New Promotion
                        </a>
                    </div>
                </div>
            </div>

            @include('admin.components.nav-tab-btn', ['urlMain' => '/admin/promotion'])

            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">

                        <div class="card-body">
                            {{--                            #Code--}}
                            <div class="position-relative row form-group">
                                <label for="code" class="col-md-3 text-md-right col-form-label">Code</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="code" id="code" placeholder="Code"
                                           type="text" class="form-control"
                                           value="{{ old('code') ?? $promotion->code ?? ''}}">
                                </div>
                            </div>
                            {{--                            Title--}}
                            <div class="position-relative row form-group">
                                <label for="title" class="col-md-3 text-md-right col-form-label">Title</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="title" id="title" placeholder="Title"
                                           type="text" class="form-control"
                                           value="{{ old('title') ?? $promotion->title ?? ''}}">
                                </div>
                            </div>
                            {{--                            Discount--}}
                            <div class="position-relative row form-group">
                                <label for="discount" class="col-md-3 text-md-right col-form-label">Discount</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="discount" id="discount" placeholder="0,00 VND"
                                           class="form-control input-mask-trigger"
                                           data-inputmask="'alias': 'numeric', 'nullable': false, 'rightAlign': true, 'groupSeparator': '.', 'radixPoint': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'suffix': ' ₫', 'placeholder': '0'"
                                           value="{{ old('discount') ?? $promotion->discount ?? ''}}">
                                </div>
                            </div>
                            {{--                            Qty Remain--}}
                            <div class="position-relative row form-group">
                                <label for="qty_remain" class="col-md-3 text-md-right col-form-label">Qty Remain</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="qty_remain" id="qty_remain"
                                           placeholder="Qty Remain"
                                           type="number" min="0" class="form-control"
                                           value="{{ old('qty_remain') ?? $promotion->qty_remain ?? ''}}">
                                </div>
                            </div>
                            {{--                            Qty Total--}}
                            <div class="position-relative row form-group">
                                <label for="qty_total" class="col-md-3 text-md-right col-form-label">Qty Total</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="qty_total" id="qty_total" placeholder="Qty Total"
                                           type="number" min="0" class="form-control"
                                           value="{{ old('qty_total') ?? $promotion->qty_total ?? ''}}">
                                </div>
                            </div>

                            {{--                            Start Date--}}
                            <div class="position-relative row form-group">
                                <label for="start_date"
                                       class="col-md-3 text-md-right col-form-label">Start Date</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="start_date" id="start_date" placeholder="start_date"
                                           type="datetime-local" class="form-control"
                                           value="{{ (old('expiration_date') ?? $promotion->expiration_date ?? '') != null ? date('Y-m-d\TH:i', strtotime((old('start_date') ?? $promotion->start_date))) : '' }}">
                                </div>
                            </div>
                            {{--                            Expiration Date--}}
                            <div class="position-relative row form-group">
                                <label for="expiration_date"
                                       class="col-md-3 text-md-right col-form-label">Expiration Date</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="expiration_date" id="expiration_date"
                                           placeholder="expiration_date"
                                           type="datetime-local" class="form-control"
                                           value="{{ (old('expiration_date') ?? $promotion->expiration_date ?? '') != null ? date('Y-m-d\TH:i', strtotime((old('expiration_date') ?? $promotion->expiration_date))) : '' }}">
                                </div>
                            </div>
                            {{--                            Active--}}
                            <div class="position-relative row form-group">
                                <label for="active" class="col-md-3 text-md-right col-form-label">Status</label>
                                <div class="col-md-9 col-xl-8">
                                    <div class="position-relative form-check pt-sm-2">
                                        <input name="active" id="active" type="checkbox" value=1
                                               {{ (old('active') ?? $promotion->active ?? '') == 1 ? 'checked' : '' }}
                                               class="form-check-input">
                                        <label for="active" class="form-check-label">Active</label>
                                    </div>
                                </div>
                            </div>
                            {{--                            Description--}}
                            <div class="position-relative row form-group">
                                <label for="description"
                                       class="col-md-3 text-md-right col-form-label">Description</label>
                                <div class="col-md-9 col-xl-8">
                                    <textarea name="description" id="description">
                                        {{ old('description') ?? $promotion->description ?? '' }}
                                    </textarea>
                                </div>
                            </div>
                            {{-- Button submit --}}
                            <div class="position-relative row form-group mb-1">
                                <div class="col-md-9 col-xl-8 offset-md-2">
                                    <a href="{{ ( !str_contains(url()->current(), 'create') && str_contains(url()->previous(), '/admin/promotion')) ? url()->previous() : '/admin/promotion' }}"
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

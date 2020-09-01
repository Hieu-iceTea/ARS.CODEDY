@extends('admin.layout.master')

@section('title', 'Show Promotion Details')

@section('main')

    <div class="app-main__inner">

        <div class="app-page-title">
            <div class="page-title-wrapper">

                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-users icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Promotion Management | Show Details
                        <div class="page-title-subheading">
                            View, create, update, delete and activate promotion accounts.
                        </div>
                    </div>
                </div>

                <div class="page-title-actions">
                    <a href="promotion/create" data-toggle="tooltip" title="Add new promotion" data-placement="bottom"
                       class="btn-shadow mr-3 btn btn-primary">
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
                    <div class="card-body display_data">
                        {{--code--}}
                        <div class="position-relative row form-group">
                            <label for="code" class="col-md-3 text-md-right col-form-label">Code</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{ $promotion->code }}</p>
                            </div>
                        </div>
                        {{--title--}}
                        <div class="position-relative row form-group">
                            <label for="title" class="col-md-3 text-md-right col-form-label">Title</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{ $promotion->title }}</p>
                            </div>
                        </div>
                        {{--discount--}}
                        <div class="position-relative row form-group">
                            <label for="discount" class="col-md-3 text-md-right col-form-label">Discount</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{ number_format($promotion->discount, 0, ',', '.') }}
                                    ₫</p>
                            </div>
                        </div>
                        {{--qty_total--}}
                        <div class="position-relative row form-group">
                            <label for="qty_total" class="col-md-3 text-md-right col-form-label">Qty Total</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{ $promotion->qty_total }}</p>
                            </div>
                        </div>
                        {{--qty_remain--}}
                        <div class="position-relative row form-group">
                            <label for="Qty_remain" class="col-md-3 text-md-right col-form-label">Qty Remain</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{ $promotion->qty_remain }}</p>
                            </div>
                        </div>
                        {{--start_date--}}
                        <div class="position-relative row form-group">
                            <label for="start_date" class="col-md-3 text-md-right col-form-label">Start Date</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{ date('H:i d/m/Y', strtotime($promotion->start_date))}}</p>
                            </div>
                        </div>
                        {{--expiration_date--}}
                        <div class="position-relative row form-group">
                            <label for="expiration_date" class="col-md-3 text-md-right col-form-label">Expiration Date</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{ date('H:i d/m/Y', strtotime($promotion->expiration_date)) }}</p>
                            </div>
                        </div>
                        {{--active--}}
                        <div class="position-relative row form-group">
                            <label for="active" class="col-md-3 text-md-right col-form-label">Status</label>
                            <div class="col-md-9 col-xl-8">
                                <p>
                                <div
                                    class="badge badge-{{ $promotion->active == 1 ? 'success' : 'warning' }} mt-2">
                                    {{ $promotion->active == 1 ? 'Active' : 'Inactive' }}
                                </div>
                                </p>
                            </div>
                        </div>
                        {{--description--}}
                        <div class="position-relative row form-group">
                            <label for="description" class="col-md-3 text-md-right col-form-label">Description</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{!! $promotion->description !!} </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

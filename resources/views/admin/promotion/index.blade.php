@extends('admin.layout.master')

@section('title', 'Promotion')

@section('main')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">

                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-ticket icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Promotion Management
                        <div class="page-title-subheading">
                            View, create, update, delete and manage promotion.
                        </div>
                    </div>
                </div>

                <div class="page-title-actions">
                    <a href="{{ url()->current() . '/create' }}" data-toggle="tooltip"
                       data-placement="bottom"
                       class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-plus fa-w-20"></i>
                        </span>
                        New Promotion
                    </a>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">

                    <div class="card-header">

                        <form>
                            <div class="input-group">
                                <input name="search" type="search" value="{{ request('search') }}"
                                       placeholder="Search everything"
                                       class="form-control">
                                <span class="input-group-append">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-search"></i>&nbsp;
                                        </button>
                                    </span>
                            </div>
                        </form>

                        <div class="btn-actions-pane-right">
                            <div role="group" class="btn-group-sm btn-group">
                                <button class="active btn btn-focus">This week</button>
                                <button class="btn btn-focus">Anytime</button>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover"
                               style="overflow: hidden;">
                            <thead>
                            <tr>
                                <th class="text-center">#CODE</th>
                                <th>Title</th>
                                <th class="text-center">Discount</th>
                                <th class="text-center">Qty</th>
                                <th class="text-center">Start Date</th>
                                <th class="text-center">Expiration Date</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($promotions as $promotion)
                                <tr>
                                    {{--#code--}}
                                    <td class="text-center text-muted">#{{$promotion->code}}</td>
                                    {{--Title--}}
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{$promotion->title}}</div>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    {{--Discount--}}
                                    <td class="text-center">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left flex2">
                                                    {{ number_format($promotion->discount, 0, ',', '.') }}₫
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    {{--Qty--}}
                                    <td class="text-center">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left flex2">
                                                    {{$promotion->qty_remain}}/{{$promotion->qty_total}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    {{--Start Date--}}
                                    <td class="text-center">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-subheading opacity-10">
                                                        {{ date('H:i d/m/Y', strtotime($promotion->start_date))}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    {{--Expiration Date--}}
                                    <td class="text-center">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-subheading opacity-10">
                                                        {{ date('H:i d/m/Y', strtotime($promotion->expiration_date))}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    {{--Active--}}
                                    <td class="text-center">
                                        <div
                                            class="badge badge-{{ $promotion->active == 1 ? 'success' : 'warning' }} mt-2">
                                            {{ $promotion->active == 1 ? 'Active' : 'Inactive' }}
                                        </div>
                                    </td>
                                    {{--Action--}}
                                    <td class="text-center">
                                        <a href="{{ url()->current() . '/' . $promotion->promotion_id }}"
                                           class="btn btn-primary btn-hover-shine btn-sm">
                                            Details
                                        </a>
                                        <a href="{{ url()->current() . '/' . $promotion->promotion_id . '/edit'}}"
                                           data-toggle="tooltip" title="Edit" data-placement="bottom"
                                           class="btn btn-warning btn-hover-shine btn-sm">
                                            <span class="btn-icon-wrapper opacity-8">
                                                <i class="fa fa-edit fa-w-20"></i>
                                            </span>
                                        </a>
                                        <form class="d-inline"
                                              action="{{ url()->current() . '/' . $promotion->promotion_id }}"
                                              method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-hover-shine btn-danger btn-sm" type="submit"
                                                    data-toggle="tooltip" title="Delete" data-placement="bottom"
                                                    onclick="return confirm('Do you really want to delete this item?')">
                                                    <span class="btn-icon-wrapper opacity-8">
                                                        <i class="fa fa-trash fa-w-20"></i>
                                                    </span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="d-block card-footer">
                        {{ $promotions->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

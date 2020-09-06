@extends('admin.layout.master')

@section('title', 'Plane')

@section('main')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">

                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-ticket icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Plane Management
                        <div class="page-title-subheading">
                            View, create, update, delete and manage plane.
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

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">

                    <div class="card-header">

                        <form>
                            <div class="input-group">
                                <input type="search" name="search" id="search" value="{{ request('search') }}"
                                       placeholder="Search everything" class="form-control">
                                <span class="input-group-append">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-search"></i>&nbsp;
                                            Search
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
                        <table class="align-middle mb-0 text-center  table table-borderless table-striped table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th class="text-left">Name</th>
                                <th>Code</th>
                                <th>Status</th>
                                <th class="" style="margin-left: 20px !important;"><span>Action</span></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($geDatatPlanes as $key=> $geDatatPlane)
                                <tr>
                                    {{--id--}}
                                    <td class="text-muted">#{{ ++$key}}</td>
                                    {{--name--}}
                                    <td class="text-left">
                                        <h4 style="font-size:18px;font-weight: bold "> {{ $geDatatPlane->name }}</h4>
                                    </td>
                                    {{-- Hien thi ma cua may bay--}}
                                    <td>
                                        <h4 style="font-size:18px;">{{ $geDatatPlane->code }}</h4>
                                    </td>
                                    {{--Hiện thị trạng thái của máy bay--}}
                                    <td>
                                        <div
                                            class="badge badge-{{ $geDatatPlane->active == 1 ? 'success' : 'warning' }} mt-2">
                                            {{ $geDatatPlane->active == 1 ? 'Active' : 'Inactive' }}
                                        </div>
                                    </td>
                                    {{--Action--}}
                                    <td>
                                        <a href="{{ url()->current() . '/' .  $geDatatPlane->plane_id }}"
                                           class="btn btn-primary btn-hover-shine btn-sm">
                                            Details
                                        </a>
                                        <a href="{{ url()->current() . '/' . $geDatatPlane->plane_id . '/edit'}}"
                                           data-toggle="tooltip" title="Edit" data-placement="bottom"
                                           class="btn btn-warning btn-hover-shine btn-sm">
                                            <span class="btn-icon-wrapper opacity-8">
                                                <i class="fa fa-edit fa-w-20"></i>
                                            </span>
                                        </a>
                                        <form class="d-inline"
                                              action="{{ url()->current() . '/' . $geDatatPlane->plane_id }}"
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
                        {{ $geDatatPlanes->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

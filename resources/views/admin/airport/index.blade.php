@extends('admin.layout.master')

@section('title', 'Airport')

@section('main')

    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">

                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-ticket icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Airport Management
                        <div class="page-title-subheading">
                            View, create, update, delete and manage airport.
                        </div>
                    </div>
                </div>

                <div class="page-title-actions">
                    <a href="{{ url()->current() . '/create'}}"
                       class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus fa-w-20"></i>
                                    </span>
                        New Airport
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
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">#ID</th>
                                <th>Image/Name</th>
                                <th class="text-center">Location</th>
                                <th class="text-center">Code</th>
                                <th class="text-center">Active</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($airports as $airport)
                                <tr>
                                    {{--id--}}
                                    <td class="text-center text-muted">#{{ $airport->airport_id }}</td>
                                    {{--name--}}
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img style="height: 60px;" class=""
                                                             src="../img/airport/{{ $airport->image }}"
                                                             alt="image of arrival airport"
                                                             data-toggle="tooltip" title="Image of airport"
                                                             data-placement="bottom">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">
                                                        {{ $airport->name }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    {{--location--}}
                                    <td class="text-center">
                                        {{ $airport->location }}
                                    </td>
                                    {{--code--}}
                                    <td class="text-center">
                                        {{ $airport->code }}
                                    </td>
                                    {{--Active--}}
                                    <td class="text-center">
                                        <div
                                            class="badge badge-{{ $airport->active == 1 ? 'success' : 'warning' }} mt-2">
                                            {{ $airport->active == 1 ? 'Active' : 'Inactive' }}
                                        </div>
                                    </td>
                                    {{--Action--}}
                                    <td class="text-center">
                                        <a href="{{ url()->current() . '/' . $airport->airport_id }}"
                                           class="btn btn-primary btn-hover-shine btn-sm">
                                            Details
                                        </a>
                                        <a href="{{ url()->current() . '/' . $airport->airport_id . '/edit'}}"
                                           data-toggle="tooltip" title="Edit" data-placement="bottom"
                                           class="btn btn-warning btn-hover-shine btn-sm">
                                            <span class="btn-icon-wrapper opacity-8">
                                                <i class="fa fa-edit fa-w-20"></i>
                                            </span>
                                        </a>
                                        <form class="d-inline"
                                              action="{{ url()->current() . '/' . $airport->airport_id }}"
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
                        {{ $airports->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection

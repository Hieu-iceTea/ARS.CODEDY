@extends('admin.layout.master')

@section('title', 'User Manage')

@section('main')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">

                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-users icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>User Management
                        <div class="page-title-subheading">
                            View, create, update, delete and activate user accounts.
                        </div>
                    </div>
                </div>

                <div class="page-title-actions">
                    <a href="{{ url()->current() . '/create' }}" data-toggle="tooltip" title="Add new user"
                       data-placement="bottom"
                       class="btn-shadow mr-3 btn btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus fa-w-20"></i>
                                    </span>
                        New User
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
                                <input name="search" value="{{ request('search') }}" placeholder="Search"
                                       class="form-control">
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
                                <th class="text-center">#</th>
                                <th>User Name / Full Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)
                                <tr>
                                    <td class="text-center text-muted">#{{ $user->user_id }}</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle"
                                                             src="assets/images/avatars/default.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{ $user->user_name }}</div>
                                                    <div class="widget-subheading opacity-7">
                                                        {{ $user->last_name . ' ' . $user->first_name }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $user->email }}</td>
                                    <td class="text-center">
                                        <div
                                            class="badge badge-{{ $user->active == 1 ? 'success' : 'warning' }} mt-2">
                                            {{ $user->active == 1 ? 'Active' : 'Inactive' }}
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url()->current() . '/' . $user->user_id }}"
                                           class="btn btn-primary btn-sm">
                                            Details
                                        </a>
                                        <a href="{{ url()->current() . '/' . $user->user_id . '/edit' }}"
                                           class="btn btn-warning btn-sm">
                                            <span class="btn-icon-wrapper opacity-8">
                                                <i class="fa fa-edit fa-w-20"></i>
                                            </span>
                                        </a>
                                        <form class="d-inline" action="{{ url()->current() . '/' . $user->user_id }}"
                                              method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit"
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
                        {{ $users->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

@extends('admin.layout.master')

@section('title', 'Show User Details')

@section('main')

    <div class="app-main__inner">

        <div class="app-page-title">
            <div class="page-title-wrapper">

                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-users icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>User Management | Show Details
                        <div class="page-title-subheading">
                            View, create, update, delete and activate user accounts.
                        </div>
                    </div>
                </div>

                <div class="page-title-actions">
                    <a href="user/create" data-toggle="tooltip" title="Add new user" data-placement="bottom"
                       class="btn-shadow mr-3 btn btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus fa-w-20"></i>
                                    </span>
                        New User
                    </a>
                </div>

            </div>
        </div>

        @include('admin.components.nav-tab-btn', ['urlMain' => '/admin/user'])

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body display_data">
                        <div class="position-relative row form-group">
                            <label for="image" class="col-md-3 text-md-right col-form-label">Avatar</label>
                            <div class="col-md-9 col-xl-8">
                                <p>
                                    <img height="200" class="rounded-circle"
                                         data-toggle="tooltip" title="Avatar" data-placement="bottom"
                                         src="../img/user/{{ $user->image ?? '_default.png' }}" alt="Avatar">
                                </p>
                                <small class="form-text text-muted">
                                    {{ isset($user->image) ? 'Look at it, it looks great!' : 'No images, upload them!' }}
                                </small>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="user_name" class="col-md-3 text-md-right col-form-label">User Name</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{ $user->user_name }}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="first_name" class="col-md-3 text-md-right col-form-label">First Name</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{ $user->first_name }}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="last_name" class="col-md-3 text-md-right col-form-label">Last Name</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{ $user->last_name }}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="email" class="col-md-3 text-md-right col-form-label">Email</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{ $user->email }}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="gender" class="col-md-3 text-md-right col-form-label">Gender</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{ \App\Utilities\Utility::$gender[$user->gender] }}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="dob" class="col-md-3 text-md-right col-form-label">DOB</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{ $user->dob }}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="phone" class="col-md-3 text-md-right col-form-label">Phone</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{ $user->phone }}</p>
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="address" class="col-md-3 text-md-right col-form-label">Address</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{ $user->address }}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="level" class="col-md-3 text-md-right col-form-label">Level</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{ \App\Utilities\Utility::$user_level[$user->level] }}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="active" class="col-md-3 text-md-right col-form-label">Status</label>
                            <div class="col-md-9 col-xl-8">
                                <p>
                                <div
                                    class="badge badge-{{ $user->active == 1 ? 'success' : 'warning' }} mt-2">
                                    {{ $user->active == 1 ? 'Active' : 'Inactive' }}
                                </div>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@extends('admin.layout.master')

@section('title', request()->segment(3) == 'create' ? 'Create User' : 'Edit User')

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
                        <div>User Management | {{ request()->segment(3) == 'create' ? 'Create User' : 'Edit User' }}
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
                        <div class="card-body">

                            <div class="position-relative row form-group">
                                <label for="image" class="col-md-3 text-md-right col-form-label">Avatar</label>
                                <div class="col-md-9 col-xl-8">
                                    <img id="thumbnail" height="200" class="rounded-circle" style="cursor: pointer"
                                         data-toggle="tooltip" title="Click to change the image" data-placement="bottom"
                                         src="{{ isset($user->image) ? '../img/user/' . $user->image : '../img/icon/upload_select.png' }}"
                                         alt="Avatar Error">
                                    <input name="image" id="image" type="file" onchange="changeImg(this)"
                                           class="form-control-file" style="display: none;"
                                           value="{{ old('image') ?? $user->image ?? ''}}">
                                    <input type="hidden" name="image_old" value="{{ $user->image ?? '' }}">
                                    <small class="form-text text-muted">
                                        {{ isset($user->image) ? 'Look at it, it looks great! (Click on the image to change)' : 'No images, upload them! (Click on the image to change)' }}
                                    </small>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="user_name" class="col-md-3 text-md-right col-form-label">User Name</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="user_name" id="user_name" placeholder="User Name"
                                           type="text" class="form-control"
                                           value="{{ old('user_name') ?? $user->user_name ?? ''}}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="first_name" class="col-md-3 text-md-right col-form-label">First Name</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="first_name" id="first_name" placeholder="First Name"
                                           type="text" class="form-control"
                                           value="{{ old('first_name') ?? $user->first_name ?? ''}}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="last_name" class="col-md-3 text-md-right col-form-label">Last Name</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="last_name" id="last_name" placeholder="Last Name"
                                           type="text" class="form-control"
                                           value="{{ old('last_name') ?? $user->last_name ?? ''}}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="email" class="col-md-3 text-md-right col-form-label">Email</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="email" id="email" placeholder="Email"
                                           type="email" class="form-control"
                                           value="{{ old('email') ?? $user->email ?? ''}}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="password"
                                       class="col-md-3 text-md-right col-form-label">{{ request()->segment(3) == 'create' ? 'Password' : 'New Password' }}</label>
                                <div class="col-md-9 col-xl-8">
                                    <input {{ request()->segment(3) == 'create' ? 'required' : '' }}
                                           name="password" id="password" type="password"
                                           placeholder="{{ request()->segment(3) == 'create' ? 'Password' : 'New Password' }}"
                                           class="form-control" value="{{ old('password') ?? ''}}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="password_confirmation"
                                       class="col-md-3 text-md-right col-form-label">{{ request()->segment(3) == 'create' ? 'Confirm Password' : 'Confirm New Password' }}</label>
                                <div class="col-md-9 col-xl-8">
                                    <input
                                        {{ request()->segment(3) == 'create' ? 'required' : '' }}
                                        name="password_confirmation" id="password_confirmation" type="password"
                                        placeholder="{{ request()->segment(3) == 'create' ? 'Confirm Password' : 'Confirm New Password' }}"
                                        class="form-control" value="{{ old('password_confirmation') ?? ''}}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="gender" class="col-md-3 text-md-right col-form-label">Gender</label>
                                <div class="col-md-9 col-xl-8">
                                    <select name="gender" id="gender" class="form-control">
                                        <option>-- Gender --</option>
                                        <option
                                            value="1" {{ (old('gender') ?? $user->gender ?? '') == 1 ? 'selected' : '' }}>
                                            Male
                                        </option>
                                        <option
                                            value="2" {{ (old('gender') ?? $user->gender ?? '') == 2 ? 'selected' : '' }}>
                                            Female
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="dob" class="col-md-3 text-md-right col-form-label">DOB (from 12
                                    years)</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="dob" id="dob" placeholder="DOB"
                                           type="date" class="form-control"
                                           max="{{ date('Y-m-d', strtotime(\Carbon\Carbon::now()->subYear(12)->toDateTimeString())) }}"
                                           value="{{ old('dob') ?? $user->dob ?? ''}}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="phone" class="col-md-3 text-md-right col-form-label">Phone</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="phone" id="phone" placeholder="Phone"
                                           type="tel" class="form-control"
                                           value="{{ old('phone') ?? $user->phone ?? ''}}">
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="address" class="col-md-3 text-md-right col-form-label">Address</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="address" id="address" placeholder="Address"
                                           type="text" class="form-control"
                                           value="{{ old('address') ?? $user->address ?? ''}}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="level" class="col-md-3 text-md-right col-form-label">Level</label>
                                <div class="col-md-9 col-xl-8">
                                    <select name="level" id="level" class="form-control">
                                        <option>-- Level --</option>
                                        <option
                                            value=1 {{ (old('level') ?? $user->level ?? '') == 1 ? 'selected' : '' }}>
                                            Host
                                        </option>
                                        <option
                                            value=2 {{ (old('level') ?? $user->level ?? '') == 2 ? 'selected' : '' }}>
                                            Admin
                                        </option>
                                        <option
                                            value=3 {{ (old('level') ?? $user->level ?? '') == 3 ? 'selected' : '' }}>
                                            User
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="active" class="col-md-3 text-md-right col-form-label">Status</label>
                                <div class="col-md-9 col-xl-8">
                                    <div class="position-relative form-check pt-sm-2">
                                        <input name="active" id="active" type="checkbox" value=1
                                               {{ (old('active') ?? $user->active ?? '') == 1 ? 'checked' : '' }}
                                               class="form-check-input">
                                        <label for="active" class="form-check-label">Active</label>
                                    </div>
                                </div>
                            </div>

                            {{-- Button submit --}}
                            <div class="position-relative row form-group mb-1">
                                <div class="col-md-9 col-xl-8 offset-md-2">
                                    <a href="{{ ( !str_contains(url()->current(), 'create') && str_contains(url()->previous(), '/admin/user')) ? url()->previous() : '/admin/user' }}"
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

@endsection

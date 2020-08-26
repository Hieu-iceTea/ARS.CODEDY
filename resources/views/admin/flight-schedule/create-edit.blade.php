@extends('admin.layout.master')

@section('title', request()->segment(3) == 'create' ? 'Create Flight Schedule' : 'Edit Flight Schedule')

@section('main')

    <div class="app-main__inner">

        <form method="post">
            @csrf

            <div class="app-page-title">
                <div class="page-title-wrapper">

                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-plane icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Flight Schedule Management
                            | {{ request()->segment(3) == 'create' ? 'Create' : 'Edit' }}
                            <div class="page-title-subheading">
                                View, create, update, delete and activate flight schedule.
                            </div>
                        </div>
                    </div>

                    <div class="page-title-actions">
                        <a href="flight-schedule/create" data-toggle="tooltip" title="Add new flight schedule"
                           data-placement="bottom"
                           class="btn-shadow mr-3 btn btn-primary">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-plus fa-w-20"></i>
                                </span>
                            New Flight Schedule
                        </a>
                    </div>

                </div>
            </div>

            @include('admin.components.nav-tab-btn', ['urlMain' => '/admin/flight-schedule'])

            <div class="row">
                <div class="col">
                    <div class="main-card mb-3 card">
                        <div class="card-header">
                            <i class="fa fa-plane pr-2"></i>
                            Schedule, airport, plane.
                        </div>

                        <div class="card-body">

                            <div class="position-relative row form-group">
                                <label for="airport_from_id" class="col-md-3 text-md-right col-form-label">Airport
                                    from</label>
                                <div class="col-md-9 col-xl-8">
                                    <select name="airport_from_id" id="airport_from_id"
                                            class="multiselect-dropdown form-control">
                                        <option>-- Airport from --</option>
                                        @foreach($airports as $airport)
                                            <option
                                                value={{ $airport->airport_id }}
                                                {{ (old('airport_from_id') ?? $flightSchedule->airport_from_id ?? '') == $airport->airport_id ? 'selected' : '' }}>
                                                {{ $airport->location }}
                                                ({{ $airport->code }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="airport_to_id"
                                       class="col-md-3 text-md-right col-form-label">Airport to</label>
                                <div class="col-md-9 col-xl-8">
                                    <select name="airport_to_id" id="airport_to_id"
                                            class="multiselect-dropdown form-control">
                                        <option>-- Airport to --</option>
                                        @foreach($airports as $airport)
                                            <option
                                                value={{ $airport->airport_id }}
                                                {{ (old('airport_to_id') ?? $flightSchedule->airport_to_id ?? '') == $airport->airport_id ? 'selected' : '' }}>
                                                {{ $airport->location }}
                                                ({{ $airport->code }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="plane_id" class="col-md-3 text-md-right col-form-label">Plane</label>
                                <div class="col-md-9 col-xl-8">
                                    <select name="plane_id" id="plane_id" class="multiselect-dropdown form-control">
                                        <option>-- Plane --</option>
                                        @foreach($planes as $plane)
                                            <option
                                                value={{ $plane->plane_id }}
                                                {{ (old('plane_id') ?? $flightSchedule->plane_id ?? '') == $plane->plane_id ? 'selected' : '' }}>
                                                {{ $plane->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="code" class="col-md-3 text-md-right col-form-label">Code</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="code" id="code" placeholder="Code"
                                           type="text" class="form-control"
                                           value="{{ old('code') ?? $flightSchedule->code ?? ''}}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="departure_at"
                                       class="col-md-3 text-md-right col-form-label">Departure at</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="departure_at" id="departure_at" placeholder="departure_at"
                                           type="datetime-local" class="form-control"
                                           value="{{ (old('departure_at') ?? $flightSchedule->departure_at ?? '') != null ? date('Y-m-d\TH:i', strtotime((old('departure_at') ?? $flightSchedule->departure_at))) : '' }}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="arrival_at" class="col-md-3 text-md-right col-form-label">Arrival at</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="arrival_at" id="arrival_at" placeholder="arrival_at"
                                           type="datetime-local" class="form-control"
                                           value="{{ (old('departure_at') ?? $flightSchedule->departure_at ?? '') != null ? date('Y-m-d\TH:i', strtotime((old('arrival_at') ?? $flightSchedule->arrival_at))) : '' }}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="status" class="col-md-3 text-md-right col-form-label">Status</label>
                                <div class="col-md-9 col-xl-8">
                                    <select name="status" id="status" class="multiselect-dropdown form-control">
                                        <option>-- Status --</option>
                                        @foreach(\App\Utilities\Utility::$flight_schedule_status as $key => $value)
                                            <option
                                                value={{ $key }}
                                                {{ (old('status') ?? $flightSchedule->status ?? '') == $key ? 'selected' : '' }}>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="description"
                                       class="col-md-3 text-md-right col-form-label">Description</label>
                                <div class="col-md-9 col-xl-8">
                                    <textarea name="description" id="description">
                                        {{ old('description') ?? $flightSchedule->description ?? '' }}
                                    </textarea>
                                </div>
                            </div>

                            {{-- Button submit --}}
                            <div class="position-relative row form-group mb-1">
                                <div class="col-md-9 col-xl-8 offset-md-3">
                                    <a href="{{ ( !str_contains(url()->current(), 'create') && str_contains(url()->previous(), '/admin/flight-schedule')) ? url()->previous() : '/admin/flight-schedule' }}"
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

                <div class="col-md-12 col-lg-12 col-xl-5 col-xxl-4">
                    <div class="main-card mb-3 card">
                        <div class="card-header">
                            <i class="fa fa-gem pr-2"></i>
                            Price of seat types.
                        </div>

                        <div class="card-body">

                            {{-- Eco --}}
                            <h5 class="card-title">Eco</h5>

                            <div class="position-relative row form-group">
                                <label for="eco_price" class="col-md-4 text-md-right col-form-label">Price</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="eco_price" id="eco_price" placeholder="0,00 VND"
                                           class="form-control input-mask-trigger"
                                           data-inputmask="'alias': 'numeric', 'nullable': false, 'rightAlign': true, 'groupSeparator': '.', 'radixPoint': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'suffix': ' ₫', 'placeholder': '0'"
                                           value="{{ old('eco_price') ?? $flightSchedule->priceSeatType->eco_price ?? ''}}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="eco_qty_remain"
                                       class="col-md-4 text-md-right col-form-label">Qty remain</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="eco_qty_remain" id="eco_qty_remain"
                                           placeholder="Eco qty remain"
                                           type="number" min="0" class="form-control"
                                           value="{{ old('eco_qty_remain') ?? $flightSchedule->priceSeatType->eco_qty_remain ?? ''}}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="eco_qty_total"
                                       class="col-md-4 text-md-right col-form-label">Qty total</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="eco_qty_total" id="eco_qty_total" placeholder="Eco qty total"
                                           type="number" min="0" class="form-control"
                                           value="{{ old('eco_qty_total') ?? $flightSchedule->priceSeatType->eco_qty_total ?? ''}}">
                                </div>
                            </div>

                            <hr>

                            {{-- Plus --}}
                            <h5 class="card-title">Plus</h5>

                            <div class="position-relative row form-group">
                                <label for="plus_price" class="col-md-4 text-md-right col-form-label">Price</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="plus_price" id="plus_price" placeholder="0,00 VND"
                                           class="form-control input-mask-trigger"
                                           data-inputmask="'alias': 'numeric', 'nullable': false, 'rightAlign': true, 'groupSeparator': '.', 'radixPoint': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'suffix': ' ₫', 'placeholder': '0'"
                                           value="{{ old('plus_price') ?? $flightSchedule->priceSeatType->plus_price ?? ''}}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="plus_qty_remain"
                                       class="col-md-4 text-md-right col-form-label">Qty remain</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="plus_qty_remain" id="plus_qty_remain"
                                           placeholder="Plus qty remain"
                                           type="number" min="0" class="form-control"
                                           value="{{ old('plus_qty_remain') ?? $flightSchedule->priceSeatType->plus_qty_remain ?? ''}}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="plus_qty_total"
                                       class="col-md-4 text-md-right col-form-label">Qty total</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="plus_qty_total" id="plus_qty_total"
                                           placeholder="Plus qty total"
                                           type="number" min="0" class="form-control"
                                           value="{{ old('plus_qty_total') ?? $flightSchedule->priceSeatType->plus_qty_total ?? ''}}">
                                </div>
                            </div>

                            <hr>

                            {{-- Business --}}
                            <h5 class="card-title">Business</h5>

                            <div class="position-relative row form-group">
                                <label for="business_price" class="col-md-4 text-md-right col-form-label">Price</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="business_price" id="business_price" placeholder="0,00 VND"
                                           class="form-control input-mask-trigger"
                                           data-inputmask="'alias': 'numeric', 'nullable': false, 'rightAlign': true, 'groupSeparator': '.', 'radixPoint': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'suffix': ' ₫', 'placeholder': '0'"
                                           value="{{ old('business_price') ?? $flightSchedule->priceSeatType->business_price ?? ''}}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="business_qty_remain" class="col-md-4 text-md-right col-form-label">Qty
                                    remain</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="business_qty_remain" id="business_qty_remain"
                                           placeholder="Business qty remain"
                                           type="number" min="0" class="form-control"
                                           value="{{ old('business_qty_remain') ?? $flightSchedule->priceSeatType->business_qty_remain ?? ''}}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="business_qty_total"
                                       class="col-md-4 text-md-right col-form-label">Qty total</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="business_qty_total" id="business_qty_total"
                                           placeholder="Business qty total"
                                           type="number" min="0" class="form-control"
                                           value="{{ old('business_qty_total') ?? $flightSchedule->priceSeatType->business_qty_total ?? ''}}">
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
        CKEDITOR.config.height = 100; //pixels wide.
    </script>

@endsection

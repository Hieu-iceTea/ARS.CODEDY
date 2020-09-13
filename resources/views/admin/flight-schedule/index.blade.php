@extends('admin.layout.master')

@section('title', 'Flight Schedule')

@section('main')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">

                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-plane icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Flight Schedule Management
                        <div class="page-title-subheading">
                            View, create, update, delete and manage flight schedule.
                        </div>
                    </div>
                </div>

                <div class="page-title-actions">
                    <a href="{{ url()->current() . '/create'}}"
                       class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus fa-w-20"></i>
                                    </span>
                        New Flight Schedule
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
                                <th class="text-center">#CODE</th>
                                <th>Ticket Overview</th>
                                <th class="text-center">Schedule</th>
                                <th class="text-center">Available Seat</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($flightSchedules as $flightSchedule)
                                <tr>
                                    <td class="text-center text-muted">#{{ $flightSchedule->code }}</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        {{--<img width="40" class="rounded-circle"
                                                             src="assets/images/avatars/default.jpg" alt="">--}}
                                                        <img style="height: 60px" class=""
                                                             src="../img/airport/{{ $flightSchedule->airportTo->image }}"
                                                             alt="image of arrival airport"
                                                             data-toggle="tooltip" title="Image of arrival airport"
                                                             data-placement="bottom">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div
                                                        class="widget-heading">
                                                        {{ $flightSchedule->airportFrom->location }}
                                                        <span style="font-size: 11px">
                                                            ({{$flightSchedule->airportFrom->code }})
                                                        </span>
                                                        >
                                                        {{ $flightSchedule->airportTo->location }}
                                                        <span style="font-size: 11px">
                                                            ({{ $flightSchedule->airportTo->code }})
                                                        </span>
                                                    </div>
                                                    <div class="widget-subheading opacity-8">
                                                        {{ date('H:i d/m/y', strtotime($flightSchedule->departure_at)) }}
                                                        >
                                                        {{ date('H:i d/m/y', strtotime($flightSchedule->departure_at)) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        {{ $flightSchedule->plane->name }}
                                    </td>
                                    <td class="text-center">
                                        {{ ($flightSchedule->priceSeatType->eco_qty_remain + $flightSchedule->priceSeatType->plus_qty_remain + $flightSchedule->priceSeatType->business_qty_remain) . '/' . ($flightSchedule->priceSeatType->eco_qty_total + $flightSchedule->priceSeatType->plus_qty_total + $flightSchedule->priceSeatType->business_qty_total) }}
                                    </td>
                                    <td class="text-center">
                                        <div
                                            class="badge badge-{{ \App\Utilities\Utility::$flight_schedule_status_badge[$flightSchedule->status] }} opacity-9">
                                            {{ \App\Utilities\Utility::$flight_schedule_status[$flightSchedule->status] }}
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url()->current() . '/' . $flightSchedule->flight_schedule_id }}"
                                           class="btn btn-hover-shine btn-primary btn-sm">
                                            Details
                                        </a>
                                        <a href="{{ url()->current() . '/' . $flightSchedule->flight_schedule_id . '/edit'}}"
                                           data-toggle="tooltip" title="Edit" data-placement="bottom"
                                           class="btn btn-warning btn-sm">
                                            <span class="btn-icon-wrapper opacity-8">
                                                <i class="fa fa-edit fa-w-20"></i>
                                            </span>
                                        </a>
                                        <form class="d-inline"
                                              action="{{ url()->current() . '/' . $flightSchedule->flight_schedule_id }}"
                                              method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm btn-hover-shine" type="submit"
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
                        {{ $flightSchedules->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

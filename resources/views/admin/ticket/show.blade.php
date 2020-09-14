@extends('admin.layout.master')

@section('title', 'Show Ticket Details')

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
                        <div>Ticket Management
                            | Show Details
                            <div class="page-title-subheading">
                                View, create, update, delete and activate ticket.
                            </div>
                        </div>
                    </div>

                    <div class="page-title-actions">
                        <a href="ticket/create" data-toggle="tooltip" title="Add new ticket"
                           data-placement="bottom"
                           class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-plus fa-w-20"></i>
                                </span>
                            New Ticket
                        </a>
                    </div>

                </div>
            </div>

            @include('admin.components.nav-tab-btn', ['urlMain' => '/admin/ticket'])

            <div class="row">
                <div class="col">
                    {{-- Contact information. --}}
                    <div class="main-card mb-3 card">
                        <div class="card-header">
                            <i class="fa fa-user pr-2"></i>
                            Contact information.
                        </div>

                        <div class="card-body display_data">

                            {{-- Contact --}}

                            <div class="position-relative row form-group">
                                <label for="contact_first_name" class="col-md-3 text-md-right col-form-label">
                                    Full name
                                </label>
                                <div class="col-md-9 col-xl-8">
                                    <div class="row">
                                        <div class="col-6">
                                            <p>{{ $ticket->contact_first_name }}</p>
                                        </div>
                                        <div class="col-6">
                                            <p>{{ $ticket->contact_last_name }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="contact_email" class="col-md-3 text-md-right col-form-label">
                                    Email
                                </label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ $ticket->contact_email }}</p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="contact_phone" class="col-md-3 text-md-right col-form-label">
                                    Phone
                                </label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ $ticket->contact_phone }}</p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="contact_address" class="col-md-3 text-md-right col-form-label">
                                    Address
                                </label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ $ticket->contact_address }}</p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="description"
                                       class="col-md-3 text-md-right col-form-label">Description</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{!! $ticket->description !!}</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Passengers --}}
                    <div class="main-card mb-3 card">
                        <div class="card-header">
                            <i class="fa fa-users pr-2"></i>
                            Passengers ({{ count($ticket->passenger) }})
                        </div>

                        <div class="card-body display_data">

                            {{-- Passenger Item --}}
                            @foreach($ticket->passenger as $key => $passenger)
                                <h5 class="card-title">Passenger {{ $key + 1 }}
                                    ({{ \App\Utilities\Utility::$passenger_type[$passenger->passenger_type] }}
                                    , {{ \App\Utilities\Utility::$gender[$passenger->gender] }})</h5>

                                <div class="position-relative row form-group">
                                    <label for="first_name" class="col-md-3 text-md-right col-form-label">Full
                                        name</label>
                                    <div class="col-md-9 col-xl-8">
                                        <div class="row">
                                            <div class="col-6">
                                                <p>{{ $passenger->first_name }}</p>
                                            </div>
                                            <div class="col-6">
                                                <p>{{ $passenger->last_name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="dob"
                                           class="col-md-3 text-md-right col-form-label">DOB</label>
                                    <div class="col-md-9 col-xl-8">
                                        <p>{{ date('d/m/Y', strtotime($passenger->dob)) }}</p>
                                    </div>
                                </div>

                                @if($passenger->passenger_type == \App\Utilities\Utility::passenger_type_Infant)
                                    <div class="position-relative row form-group">
                                        <label for="with_passenger" class="col-md-3 text-md-right col-form-label">With
                                            passenger</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{ $passenger->with_passenger }}</p>
                                        </div>
                                    </div>
                                @endif

                                @if($key + 1 != count($ticket->passenger))
                                    <hr>
                                @endif

                            @endforeach

                        </div>
                    </div>

                    {{-- Schedule, airport, plane. --}}
                    <div class="main-card mb-3 card">
                        <div class="card-header">
                            <i class="fa fa-plane pr-2"></i>
                            Schedule, airport, plane.
                        </div>

                        <div class="card-body display_data">

                            <div class="position-relative row form-group">
                                <label for="airport_from_id" class="col-md-3 text-md-right col-form-label">Airport
                                    from</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ $ticket->flightSchedule->airportFrom->location }}
                                        ({{ $ticket->flightSchedule->airportFrom->code }})</p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="airport_to_id"
                                       class="col-md-3 text-md-right col-form-label">Airport to</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ $ticket->flightSchedule->airportTo->location }}
                                        ({{ $ticket->flightSchedule->airportTo->code }})</p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="plane_id" class="col-md-3 text-md-right col-form-label">Plane</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ $ticket->flightSchedule->plane->name }}</p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="code" class="col-md-3 text-md-right col-form-label">Code</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ $ticket->flightSchedule->code }}</p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="departure_at"
                                       class="col-md-3 text-md-right col-form-label">Departure at</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ date('H:i d/m/Y', strtotime($ticket->flightSchedule->departure_at)) }}</p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="arrival_at" class="col-md-3 text-md-right col-form-label">Arrival at</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ date('H:i d/m/Y', strtotime($ticket->flightSchedule->arrival_at)) }}</p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="status" class="col-md-3 text-md-right col-form-label">Schedule
                                    status</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>
                                    <div
                                        class="badge badge-{{ \App\Utilities\Utility::$flight_schedule_status_badge[$ticket->flightSchedule->status] }} opacity-9 mt-2">
                                        {{ \App\Utilities\Utility::$flight_schedule_status[$ticket->flightSchedule->status] }}
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="description"
                                       class="col-md-3 text-md-right col-form-label">Description</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{!! $ticket->flightSchedule->description !!}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12 col-xl-5 col-xxl-4">
                    {{-- Overview. --}}
                    <div class="main-card mb-3 card">
                        <div class="card-header">
                            <i class="fa fa-sun pr-2"></i>
                            Overview.
                        </div>

                        <div class="card-body display_data">

                            <div class="position-relative row form-group">
                                <label for="total_price" class="col-md-4 text-md-right col-form-label">
                                    Code
                                </label>
                                <div class="col-md-9 col-xl-8">
                                    <p style="font-weight: 500">
                                        {{ $ticket->code }}
                                    </p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="name"
                                       class="col-md-4 text-md-right col-form-label">Ticket Status</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>
                                    <div
                                        class="badge badge-{{ \App\Utilities\Utility::$ticket_status_badge[$ticket->status] }} opacity-9 mt-2">
                                        {{ \App\Utilities\Utility::$ticket_status[$ticket->status] }}
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="name"
                                       class="col-md-4 text-md-right col-form-label">Seat type</label>
                                <div class="col-md-9 col-xl-8">
                                    <p style="font-size: 14px; position: relative; top: 7px">
                                        <span
                                            class="badge_seat_type {{ \App\Utilities\Utility::$seat_type[$ticket->seat_type] }}">
                                            {{ \App\Utilities\Utility::$seat_type[$ticket->seat_type] }}
                                        </span>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Price & promotion. --}}
                    <div class="main-card mb-3 card">
                        <div class="card-header">
                            <i class="fa fa-gem pr-2"></i>
                            Price & promotion.
                        </div>

                        <div class="card-body display_data">

                            {{-- Payment --}}
                            <h5 class="card-title">Payment</h5>

                            <div class="position-relative row form-group">
                                <label for="name"
                                       class="col-md-4 text-md-right col-form-label">Pay type</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>{{ $ticket->payType->name }}</p>
                                    <img src="../img/pay_type/{{ $ticket->payType->image }}"
                                         style="height: 50px" alt="Pay type">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="total_price" class="col-md-4 text-md-right col-form-label">Total
                                    price</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>
                                        {{ number_format($ticket->total_price, 0, ',', '.') }} ₫
                                    </p>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="amount_paid" class="col-md-4 text-md-right col-form-label">Amount
                                    paid</label>
                                <div class="col-md-9 col-xl-8">
                                    <p>
                                        {{ number_format($ticket->amount_paid, 0, ',', '.') }} ₫
                                    </p>
                                </div>
                            </div>

                            <hr>

                            {{-- Promotion --}}
                            <h5 class="card-title">Promotion</h5>

                            @if($ticket->promotion)
                                <div class="position-relative row form-group">
                                    <label for="title"
                                           class="col-md-4 text-md-right col-form-label">Title</label>
                                    <div class="col-md-9 col-xl-8">
                                        <p>{{ $ticket->promotion->title }}</p>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="discount" class="col-md-4 text-md-right col-form-label">
                                        Discount
                                    </label>
                                    <div class="col-md-9 col-xl-8">
                                        <p>
                                            {{ number_format($ticket->promotion->discount, 0, ',', '.') }} ₫
                                        </p>
                                    </div>
                                </div>
                            @else
                                <div class="position-relative row form-group">
                                    <label for=""
                                           class="col-12 text-center col-form-label">Promotion not included</label>
                                </div>
                            @endif

                        </div>
                    </div>

                    {{-- Extra Services used. --}}
                    <div class="main-card mb-3 card">
                        <div class="card-header">
                            <i class="fa fa-star pr-2"></i>
                            Extra Services used.
                        </div>

                        <div class="card-body display_data">
                            @if($ticket->extraServices())
                                @foreach($ticket->extraServices() as $key => $extraService)
                                    <div class="position-relative row form-group">
                                        <label for="name"
                                               class="col-md-4 text-md-right col-form-label">Name</label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>{{ $extraService->name }}</p>
                                            <img src="../img/extra_service/{{ $extraService->image }}"
                                            style="height: 90px;" alt="Pay type">
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="total_price" class="col-md-4 text-md-right col-form-label">
                                            Price
                                        </label>
                                        <div class="col-md-9 col-xl-8">
                                            <p>
                                                {{ number_format($extraService->price, 0, ',', '.') }} ₫
                                            </p>
                                        </div>
                                    </div>

                                    @if($key + 1 != count($ticket->extraServices()))
                                        <hr>
                                    @endif
                                @endforeach
                            @else
                                <div class="position-relative row form-group">
                                    <label for=""
                                           class="col-12 text-center col-form-label">Extra service not included</label>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>

@endsection

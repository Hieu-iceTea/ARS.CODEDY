<div class="modal fade overflow-hidden" id="modalFlightSearch" data-backdrop="static" data-keyboard="false"
     tabindex="-1" role="dialog"
     aria-labelledby="modalFlightSearchLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header px-5 pt-4 pb-3" style="background-color: #f2f2f2; color: #00305B">

                <h5 class="modal-title pl-3" id="modalFlightSearchLabel" style="font-size: 24px">
                    <img class="logo mr-3" src="img/iconfight.png"
                         style="width: 40px; height: 40px" alt="Generic placeholder image">
                    @if(isset($isShowModalFlightSearch))
                        Search for your flights
                    @else
                        Change flight details
                    @endif
                </h5>

                @if(!isset($isShowModalFlightSearch))
                    <button type="button" class="close pr-4" data-dismiss="modal" style="outline: none"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                @endif
            </div>

            <div class="modal-body px-5 pt-4 pb-4">
                <div class="container-fluid px-4">

                    <form method="get" action="booking/step-1">

                        {{-- Row 1 --}}
                        <div class="row ticket_query mt-1">
                            <div class="col px-0">
                                <div class="newsletter">
                                    <div
                                        class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between">
                                        <div
                                            class="d-flex flex-md-row flex-column align-items-start justify-content-between w-100">

                                            <div style="width: 49%">

                                                {{--Hiện thị tên các sân bay đi--}}
                                                <label for="from">From</label>
                                                <select class="newsletter_input" id="from" name="from"
                                                        required="required">
                                                    <option selected value="">-- From --</option>
                                                    @foreach($addressAirports as $addressAirport)
                                                        <option
                                                            {{ request('from') == $addressAirport->airport_id ? 'selected' : '' }}
                                                            value= {{ $addressAirport->airport_id }}>{{ $addressAirport->location }}
                                                            | {{ $addressAirport->name }} ( {{ $addressAirport->code }}
                                                            )
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="input_border"></div>
                                            </div>

                                            <div style="width: 49%">
                                                {{--Hiện thị tên các sân bay đến--}}
                                                <label for="to">To</label>
                                                <select class="newsletter_input" id="to" name="to"
                                                        required="required">
                                                    <option selected value="">-- To --</option>
                                                    @foreach($addressAirports as $addressAirport)
                                                        <option
                                                            {{ request('to') == $addressAirport->airport_id ? 'selected' : '' }}
                                                            value= {{ $addressAirport->airport_id }}>{{ $addressAirport->location }}
                                                            | {{ $addressAirport->name }} ( {{ $addressAirport->code }}
                                                            )
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="input_border"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Row 2 --}}
                        <div class="row ticket_query mt-2">
                            <div class="col px-0">
                                <div class="newsletter">
                                    <div
                                        class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between">
                                        <div
                                            class="d-flex flex-md-row flex-column align-items-start justify-content-between w-100">

                                            <div style="width: 49%">
                                                <label for="departure">Leave</label>
                                                <input type="date" id="departure" name="departure"
                                                       value="{{ request('departure') }}" placeholder="Departure"
                                                       class="newsletter_input" required>
                                                <div class="input_border"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Row 3 --}}
                        <div class="row ticket_query mt-2">
                            <div class="col px-0">
                                <div class="newsletter">
                                    <div
                                        class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between">
                                        <div
                                            class="d-flex flex-md-row flex-column align-items-start w-100">

                                            <div style="width: 23.85%" class="mr-2">
                                                <label for="adults">Adults</label>
                                                <input type="number" id="adults" name="adults"
                                                       min="1" max="3" value="{{ request('adults') ?? 1 }}"
                                                       class="newsletter_input" required>
                                                <div class="input_border"></div>
                                            </div>

                                            <div style="width: 23.85%" class="mr-2">
                                                <label for="children">Children</label>
                                                <input type="number" id="children" name="children"
                                                       min="0" max="3" value="{{ request('children') ?? 0 }}"
                                                       class="newsletter_input" required>
                                                <div class="input_border"></div>
                                            </div>

                                            <div style="width: 23.7%" class="mr-2">
                                                <label for="infant">Infant</label>
                                                <input type="number" id="infant" name="infant"
                                                       min="0" max="3" value="{{ request('infant') ?? 0 }}"
                                                       class="newsletter_input" required>
                                                <div class="input_border"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Button --}}
                        <div class="row ticket_query mt-4 mb-3">
                            <div class="col px-0">
                                <div class="newsletter">
                                    <div
                                        class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between">
                                        <div>
                                            <button type="submit" class="newsletter_button"
                                                    style="text-transform: none; font-weight: 400">
                                                Find flights
                                                <i class="fa fa-angle-right ml-1"
                                                   style="position: relative; top: 2px; font-size: 160%"></i>
                                            </button>
                                            {{--<button type="button" class="newsletter_button" data-dismiss="modal">
                                                Close
                                            </button>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

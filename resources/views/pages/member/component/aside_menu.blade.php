<div class="col-3 pl-4 py-4" style="background-color: #dde6ed">
    <div class="row mb-3">
        <div class="col-12">
            <div class="row">
                <img class="rounded-circle m-auto" src="img/user/{{ Auth::user()->image ?? '_default.png' }}"
                     alt="Avatar" data-toggle="tooltip" title="Your avatar is here, it looks great"
                     data-placement="bottom" width="80%">
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-12">
            <h3>Hello, {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <p>Loyalty Number</p>
        </div>
        <div class="col-6">
            <p>{{ Auth::user()->loyalty_number }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <p>Card Tier</p>
        </div>
        <div class="col-6">
            <p>Registered</p>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <p>Bonus Points</p>
        </div>
        <div class="col-6">
            <p>50</p>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <p>Qualifying Point</p>
        </div>
        <div class="col-6">
            <p>0</p>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-6">
            <p>Your Total Flight</p>
        </div>
        <div class="col-6">
            <p>{{ count(Auth::user()->ticket) }}</p>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-12">
            <ul>
                <li>
                    <a href="member">Profile</a>
                </li>
                <li>
                    <a href="member/edit-profile">Edit Profile</a>
                </li>
                <li>
                    <a href="ticket">My Flights</a>
                </li>
                <li>
                    <a href="member">My Activity</a>
                </li>
                <li>
                    <a href="member">My Family</a>
                </li>
                <li>
                    <a href="member">Points Calculator</a>
                </li>
            </ul>
        </div>
    </div>

</div>

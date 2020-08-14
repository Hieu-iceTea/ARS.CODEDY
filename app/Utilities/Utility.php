<?php


namespace App\Utilities;


class Utility
{
    public static $ticket_status = [
        1 => 'Unverified',
        2 => 'Reservations',
        3 => 'Paid',
        4 => 'Finish',
    ];

    public static $seat_type = [
        1 => 'Eco',
        2 => 'Plus',
        3 => 'Business',
    ];

    public static $passenger_type = [
        1 => 'Adults',
        2 => 'Children',
        3 => 'Infant',
    ];

    public static $passenger_type_vi = [
        1 => 'Người lớn',
        2 => 'Trẻ em',
        3 => 'Em bé',
    ];

    public static $gender = [
        1 => 'MR',
        2 => 'MS',
    ];

}

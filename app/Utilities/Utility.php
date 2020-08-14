<?php


namespace App\Utilities;


use phpDocumentor\Reflection\Types\This;

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

    const user_level_host = 0;
    const user_level_admin = 1;
    const user_level_member = 2;
    public static $user_level = [
        self::user_level_host => 'host',
        self::user_level_admin => 'admin',
        self::user_level_member => 'member',
    ];
}

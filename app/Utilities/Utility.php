<?php


namespace App\Utilities;


class Utility
{

    const ticket_status_Unverified = 1;
    const ticket_status_Reservations = 2;
    const ticket_status_Paid = 3;
    const ticket_status_Finish = 4;
    const ticket_status_Cancel = 5;
    public static $ticket_status = [
        self::ticket_status_Unverified => 'Unverified',
        self::ticket_status_Reservations => 'Reservations',
        self::ticket_status_Paid => 'Paid',
        self::ticket_status_Finish => 'Finish',
        self::ticket_status_Cancel => 'Cancel',
    ];
    public static $ticket_status_badge = [
        self::ticket_status_Unverified => 'warning',
        self::ticket_status_Reservations => 'info',
        self::ticket_status_Paid => 'success',
        self::ticket_status_Finish => 'secondary',
        self::ticket_status_Cancel => 'danger',
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

    const user_level_host = 1;
    const user_level_admin = 2;
    const user_level_member = 3;
    public static $user_level = [
        self::user_level_host => 'host',
        self::user_level_admin => 'admin',
        self::user_level_member => 'member',
    ];

    /**
     * pay_type
     */
    const pay_type_PayLater = 1;
    const pay_type_VNPay = 2;
}

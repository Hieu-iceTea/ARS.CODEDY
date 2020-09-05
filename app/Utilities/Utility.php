<?php


namespace App\Utilities;


use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Utility
{
    /*
    |--------------------------------------------------------------------------
    | Các hằng số, role dùng chung toàn hệ thống
    |--------------------------------------------------------------------------
    |
    |
    */

    //ticket_status
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

    const seat_type_Eco = 1;
    const seat_type_Plus = 2;
    const seat_type_Business = 3;
    public static $seat_type = [
        self::seat_type_Eco => 'Eco',
        self::seat_type_Plus => 'Plus',
        self::seat_type_Business => 'Business',
    ];

    const passenger_type_Adults = 1;
    const passenger_type_Children = 2;
    const passenger_type_Infant = 3;
    public static $passenger_type = [
        self::passenger_type_Adults => 'Adults',
        self::passenger_type_Children => 'Children',
        self::passenger_type_Infant => 'Infant',
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

    //flight_schedule_status:
    const flight_schedule_status_Unverified = 1;
    const flight_schedule_status_Active = 2;
    const flight_schedule_status_Inactive = 3;
    const flight_schedule_status_Flying = 4;
    const flight_schedule_status_Finish = 5;
    const flight_schedule_status_Cancel = 6;
    public static $flight_schedule_status = [
        self::flight_schedule_status_Unverified => 'Unverified',
        self::flight_schedule_status_Active => 'Active',
        self::flight_schedule_status_Inactive => 'Inactive',
        self::flight_schedule_status_Flying => 'Flying',
        self::flight_schedule_status_Finish => 'Finish',
        self::flight_schedule_status_Cancel => 'Cancel',
    ];
    public static $flight_schedule_status_badge = [
        self::flight_schedule_status_Unverified => 'warning',
        self::flight_schedule_status_Active => 'success',
        self::flight_schedule_status_Inactive => 'danger',
        self::flight_schedule_status_Flying => 'info',
        self::flight_schedule_status_Finish => 'primary',
        self::flight_schedule_status_Cancel => 'secondary',
    ];

    /*
    |--------------------------------------------------------------------------
    | Các hàm dùng chung toàn hệ thống
    |--------------------------------------------------------------------------
    |
    |
    */

    /**
     *
     * Lấy tên duy nhất cho file.
     *
     * @param $file
     * @return string
     * @author Hiếu iceTea
     * @copyright Hieu-iceTea@2020-08
     *
     */
    public function getFileNameUniqueID($file)
    {
        $file_name_original = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $file_name_without_extension = Str::replaceLast('.' . $extension, '', $file_name_original);

        $str_time_now = Carbon::now()->format('ymd_his');
        $file_name = Str::slug($file_name_without_extension) . '_' . uniqid() . '_' . $str_time_now . '.' . $extension;

        return $file_name;
    }
}

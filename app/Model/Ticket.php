<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Ticket extends Model
{
    protected $table = 'ticket';
    protected $primaryKey = 'ticket_id';
    protected $guarded = [];
    protected $perPage = 5;

    public static function all($columns = ['*'])
    {
        return parent::all($columns)->where('deleted', false);
    }


    // * * * * * * * * * * * * * * * * * * * * Relationships * * * * * * * * * * * * * * * * * * * *

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'user_id');
    }

    public function passenger()
    {
        return $this->hasMany(Passenger::class, 'ticket_id', 'ticket_id');
    }

    public function payType()
    {
        return $this->hasOne(PayType::class, 'pay_type_id', 'pay_type_id');
    }

    public function promotion()
    {
        return $this->hasMany(Promotion::class, 'promotion_id', 'promotion_id');
    }

    public function extraServices()
    {
        $str = $this->extra_service_ids;

        if ($str == '') {
            return [];
        }

        $extra_service_ids = Str::of($str)->explode(',');

        $extraServices = [];

        foreach ($extra_service_ids as $extra_service_id) {
            $extraServices[] = ExtraService::find($extra_service_id);
        }

        return $extraServices;
    }

    public function flightSchedule()
    {
        return $this->hasOne(FlightSchedule::class, 'flight_schedule_id', 'flight_schedule_id');
    }


    // * * * * * * * * * * * * * * * * * * * * Scopes * * * * * * * * * * * * * * * * * * * *

    /**
     * Thêm điều kiện là user hiện tại
     *
     * where user_id = Auth::user()->user_id
     *
     * @param $query
     * @param false $value
     * @return mixed
     */
    public function scopeCurrentUser($query)
    {
        return $query->where('user_id', '=', Auth::user()->user_id);
    }
}

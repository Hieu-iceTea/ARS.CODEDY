<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Collection;
class FlightSchedule extends Model
{
    protected $table = 'flight_schedule';
    protected $primaryKey = 'flight_schedule_id';
    protected $guarded = [];
    protected $perPage = 5;

    public static function all($columns = ['*'])
    {
        return parent::all($columns)->where('deleted', false);
    }

    public function airportFrom()
    {
        return $this->hasOne(Airport::class, 'airport_id', 'airport_from_id');
    }

    public function airportTo()
    {
        return $this->hasOne(Airport::class, 'airport_id', 'airport_to_id');
    }


    public function plane()
    {
        return $this->hasOne(Plane::class, 'plane_id', 'plane_id');
    }

    public function priceSeatType()
    {
        return $this->hasOne(PriceSeatType::class, 'price_seat_type_id', 'price_seat_type_id');
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class, 'ticket_id', 'ticket_id');
    }

    /**
     * get result search flight schedule by code flight schedule
     *
     * @param $code
     * @return FlightSchedule[]|\Illuminate\Database\Eloquent\Collection
     * @author truong-thanh-tu
     */
    public function getFlightScheduleByCode($code)
    {
        if ($code == null) {
            $flightSchedules = $this::all()->sortByDesc('departure_at');;
        } else {
            $flightSchedules = $this::all()->where('code' ,'like',"%" .$code ."$")
            ->sortByDesc('departure_at');
            if ($flightSchedules != null) {
                return $flightSchedules;
            }
        }

        return $flightSchedules;
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

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

    public function airportTo()
    {
        return $this->hasOne(Airport::class, 'airport_to_id', 'airport_id');
    }

    public function airportFrom()
    {
        return $this->hasOne(Airport::class, 'airport_from_id', 'airport_id');
    }

    public function plane()
    {
        return $this->hasOne(Plane::class, 'plane_id', 'plane_id');
    }

    public function priceSeatType()
    {
        return $this->hasOne(PriceSeatType::class, 'price_seat_type_id', 'price_seat_type_id');
    }
}

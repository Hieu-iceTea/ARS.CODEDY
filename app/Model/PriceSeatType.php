<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PriceSeatType extends Model
{
    protected $table = 'price_seat_type';
    protected $primaryKey = 'price_seat_type_id';
    protected $guarded = [];
    protected $perPage = 5;

    public static function all($columns = ['*'])
    {
        return parent::all($columns)->where('deleted', false);
    }

    public function flightSchedule()
    {
        return $this->belongsTo(FlightSchedule::class, 'price_seat_type_id', 'price_seat_type_id');
    }
}

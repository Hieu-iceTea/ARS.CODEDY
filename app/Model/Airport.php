<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $table = 'airport';
    protected $primaryKey = 'airport_id';
    protected $guarded = [];
    protected $perPage = 5;

    public static function all($columns = ['*'])
    {
        return parent::all($columns)->where('deleted', false);
    }

    public function flightScheduleTo()
    {
        return $this->hasMany(FlightSchedule::class, 'airport_to_id', 'airport_id');
    }

    public function flightScheduleFrom()
    {
        return $this->hasMany(FlightSchedule::class, 'airport_from_id', 'airport_id');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    protected $table = 'plane';
    protected $primaryKey = 'plane_id';
    protected $guarded = [];
    protected $perPage = 5;

    public static function all($columns = ['*'])
    {
        return parent::all($columns)->where('deleted', false);
    }

    public function flightSchedule()
    {
        return $this->hasMany(FlightSchedule::class, 'plane_id', 'plane_id');
    }
}

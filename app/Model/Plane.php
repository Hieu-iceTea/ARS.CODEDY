<?php

namespace App\Model;

use App\Scopes\DeletedScope;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    protected $table = 'plane';
    protected $primaryKey = 'plane_id';
    protected $guarded = [];
    protected $perPage = 5;

    public function flightSchedule()
    {
        return $this->hasMany(FlightSchedule::class, 'plane_id', 'plane_id');
    }


    // * * * * * * * * * * * * * * * * * * * * Scopes * * * * * * * * * * * * * * * * * * * *

    /**
     * Perform any actions required after the model boots.
     *
     * @return void
     */
    protected static function booted()
    {
        //Applying Global Scopes
        static::addGlobalScope(new DeletedScope());
    }
}

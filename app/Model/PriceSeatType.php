<?php

namespace App\Model;

use App\Scopes\DeletedScope;
use Illuminate\Database\Eloquent\Model;

class PriceSeatType extends Model
{
    protected $table = 'price_seat_type';
    protected $primaryKey = 'price_seat_type_id';
    protected $guarded = [];
    protected $perPage = 5;

    public function flightSchedule()
    {
        return $this->belongsTo(FlightSchedule::class, 'price_seat_type_id', 'price_seat_type_id');
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

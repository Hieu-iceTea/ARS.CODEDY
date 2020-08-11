<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $table = 'passenger';
    protected $primaryKey = 'passenger_id';
    protected $guarded = [];
    protected $perPage = 5;

    public static function all($columns = ['*'])
    {
        return parent::all($columns)->where('deleted', false);
    }

    public function ticket()
    {
        return $this->hasOne(Ticket::class, 'ticket_id', 'ticket_id');
    }
}

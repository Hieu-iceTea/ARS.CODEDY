<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

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
        return $this->hasMany(PayType::class, 'pay_type_id', 'pay_type_id');
    }

    public function promotion() {
        return $this->hasMany(Promotion::class, 'promotion_id', 'promotion_id');
    }
}

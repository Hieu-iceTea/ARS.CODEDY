<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PayType extends Model
{
    protected $table = 'pay_type';
    protected $primaryKey = 'pay_type_id';
    protected $guarded = [];
    protected $perPage = 5;

    public static function all($columns = ['*'])
    {
        return parent::all($columns)->where('deleted', false);
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class, 'pay_type_id', 'pay_type_id');
    }
}

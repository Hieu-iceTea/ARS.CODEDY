<?php

namespace App\Model;

use App\Scopes\DeletedScope;
use Illuminate\Database\Eloquent\Model;

class PayType extends Model
{
    protected $table = 'pay_type';
    protected $primaryKey = 'pay_type_id';
    protected $guarded = [];
    protected $perPage = 5;

    public function ticket()
    {
        return $this->hasMany(Ticket::class, 'pay_type_id', 'pay_type_id');
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

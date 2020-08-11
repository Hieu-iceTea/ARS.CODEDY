<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ExtraService extends Model
{
    protected $table = 'extra_service';
    protected $primaryKey = 'extra_service_id';
    protected $guarded = [];
    protected $perPage = 5;

    public static function all($columns = ['*'])
    {
        return parent::all($columns)->where('deleted', false);
    }
}

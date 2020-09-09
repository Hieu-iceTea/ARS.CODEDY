<?php

namespace App\Model;

use App\Scopes\DeletedScope;
use Illuminate\Database\Eloquent\Model;

class ExtraService extends Model
{
    protected $table = 'extra_service';
    protected $primaryKey = 'extra_service_id';
    protected $guarded = [];
    protected $perPage = 5;

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

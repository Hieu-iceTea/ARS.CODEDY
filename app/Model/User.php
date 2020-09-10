<?php

namespace App\Model;

use App\Scopes\DeletedScope;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';
    protected $primaryKey = 'user_id';
    protected $guarded = [];
    protected $perPage = 5;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // * * * * * * * * * * * * * * * * * * * * Relationships * * * * * * * * * * * * * * * * * * * *

    /**
     * Define a one-to-many relationship.
     *
     * @return HasMany
     */
    public function ticket()
    {
        return $this->hasMany(Ticket::class, 'user_id', 'user_id');
    }


    // * * * * * * * * * * * * * * * * * * * * Getter functions * * * * * * * * * * * * * * * * * * * *

    /**
     * Get all of the items from the database.
     *
     * @return mixed
     */
    public static function getItems()
    {
        return User::orderBy('user_id', 'desc')->paginate();
    }

    /**
     * Get an item by ID
     *
     * @param $id
     * @return mixed
     */
    public static function getItemById($id)
    {
        return User::findOrFail($id);
    }

    /**
     * Get all of the items from the database by search keyword.
     *
     * @param $keyword
     * @return mixed
     */
    public static function search($keyword)
    {
        return User::where('user_id', '=', $keyword)
            ->orWhere('user_name', 'like', '%' . $keyword . '%')
            ->orWhere('first_name', 'like', '%' . $keyword . '%')
            ->orWhere('last_name', 'like', '%' . $keyword . '%')
            ->orWhere('email', 'like', '%' . $keyword . '%')
            ->orWhere('dob', 'like', '%' . $keyword . '%')
            ->orWhere('phone', 'like', '%' . $keyword . '%')
            ->orWhere('address', 'like', '%' . $keyword . '%')
            ->orderBy('user_id', 'desc')

            //Phân trang theo config mặc định đã cài đặt trong Model:
            ->paginate()

            //Giúp chuyển trang page sẽ đính kèm từ khóa search của người dùng:
            ->appends(['search' => $keyword]);
    }


    // * * * * * * * * * * * * * * * * * * * * Scopes * * * * * * * * * * * * * * * * * * * *

    /**
     * Local Scopes
     * Dynamic Scopes
     *
     * @param $query
     * @param false $value
     * @return mixed
     */
    public function scopeDeleted($query, $value = false)
    {
        return $query->where('deleted', '=', $value);
    }

    /**
     * Perform any actions required after the model boots.
     *
     * @return void
     */
    protected static function booted()
    {
        //Applying Global Scopes
        static::addGlobalScope(new DeletedScope());

        //use: Anonymous Global Scopes
        //static::addGlobalScope('deleted', function (Builder $builder) {
        //    $builder->where('deleted', '=', false);
        //});
    }
}

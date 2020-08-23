<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';
    protected $primaryKey = 'user_id';
    protected $guarded = [];
    protected $perPage = 5;

    public static function all($columns = ['*'])
    {
        return parent::all($columns)->where('deleted', false);
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class, 'user_id', 'user_id');
    }

    public static function getItems()
    {
        return User::where('deleted', '=', false)->paginate();
    }

    public static function getItemById($id)
    {
        return User::all()->where('user_id', $id)->first();
    }

    public static function search($keyword)
    {
        $users = User::where('user_id', '=', $keyword)
            ->orWhere('first_name', 'like', '%' . $keyword . '%')
            ->orWhere('last_name', 'like', '%' . $keyword . '%')
            ->orWhere('email', 'like', '%' . $keyword . '%')
            ->orWhere('user_name', 'like', '%' . $keyword . '%')
            ->paginate();

        //giúp chuyển trang page sẽ đính kèm theo từ khóa search của người dùng:
        $users->appends(['search' => $keyword]);

        return $users;
    }

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
}

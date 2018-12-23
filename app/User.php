<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\UserTrait;

class User extends Authenticatable
{
    use Notifiable,UserTrait;

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


    /** define user & role relationship... */

    public function roles()
    {
        return $this->belongstoMany(Role::class);
    }
     /** define user & role relationship... */

    public function permissions()
    {
        return $this->belongstoMany(Permission::class);
    }

    public function roles_access()
    {
        return $this->morphedByMany(Role::class,'accessible');
    }

    public function permissions_access()
    {
        return $this->morphedByMany(Permission::class,'accessible');
    }
}

<?php

namespace Spf;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'phone', 'policy'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /**protected $hidden = [
        'password', 'remember_token',
    ];**/

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function missings()
    {
        return $this->hasMany('Spf\Shift\Entities\Missing');
    }
}

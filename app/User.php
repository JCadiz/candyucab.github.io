<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'fk_natural', 'fk_juridico'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function natural()
    {
        return $this->belongsTo('App\Natural', 'fk_natural', 'id');
    }

    public function juridico()
    {
        return $this->belongsTo('App\Juridico', 'fk_juridico', 'id');
    }
}

<?php

namespace App;

use App\Notifications\NaturalResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Natural extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'rif', 'cedula', 'Pnombre', 'Snombre', 'Papellido', 'Sapellido', 'fk_lugar'
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
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new NaturalResetPassword($token));
    }

    public function lugar()
    {
        return $this->belongsTo('App\Lugar', 'fk_lugar', 'id');
    }

    public function facturacion()
    {
        return $this->hasMany('App\Facturacion', 'fk_naturals', 'id');
    }

    public function historialcompra()
    {
        return $this->hasMany('App\Historialcompra', 'historialcompra', 'id');
    }

    public function telefono()
    {
        return $this->hasOne('App\Telefono', 'fk_naturals', 'id');
    }

    public function candypoint()
    {
        return $this->hasMany('App\CandyPoint', 'fk_naturals', 'id');
    }
}

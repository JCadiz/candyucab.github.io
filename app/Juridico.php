<?php

namespace App;

use App\Notifications\JuridicoResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Juridico extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','rif','paginaWeb','capital','denominacion','razonSocial','fk_lugar'
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
        $this->notify(new JuridicoResetPassword($token));
    }

    public function lugar(){
        return $this->belongsTo('App\Lugar', 'fk_lugar', 'id');
    }

    public function facturacion()
    {
        return $this->hasMany('App\Facturacion', 'fk_juridicos', 'id');
    }

    public function historialcompra()
    {
        return $this->hasMany('App\Historialcompra', 'fk_historialcompra', 'id');
    }

    public function telefono()
    {
        return $this->hasOne('App\Telefono', 'fk_juridico', 'id');
    }

    public function contacto()
    {
        return $this->hasMany('App\Contacto', 'fk_juridico', 'id');
    }

    public function candypoint()
    {
        return $this->hasMany('App\CandyPoint', 'fk_juridicos', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $fillable = [
        'nombre', 'tipo','fk_lugar','fk_empleado'
    ];

    public function lugar(){
         return $this->belongsTo('App\Lugar', 'fk_lugar', 'id');
    }

    public function carnet()
    {
        return $this->hasMany('App\Carnet', 'fk_tienda', 'id');
    }

    public function empleado()
    {
        return $this->hasMany('App\Empleado', 'fk_tienda', 'id');
    }

    public function pasillo()
    {
        return $this->hasMany('App\Pasillo', 'fk_tienda', 'id');
    }

    public function tienda()
    {
        return $this->hasMany('App\Stcok', 'fk_tienda', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'cedula', 'nombre','apellido','horarioInicio', 'horarioFinal','fk_tienda'
    ];

    public function tienda(){
         return $this->belongsTo('App\Tienda', 'fk_tienda', 'id');
    }

    public function asistencia()
    {
        return $this->hasMany('App\Asistencia', 'fk_empleado', 'id');
    }

    public function beneficio()
    {
        return $this->hasMany('App\Beneficio', 'fk_empleado', 'id');
    }
}

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
}

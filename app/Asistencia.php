<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = [
        'fechaEntrada', 'fechaSalida', 'cantidadFaltas', 'fk_empleado'
    ];

    public function empleado()
    {
        return $this->belongsTo('App\Empleado', 'fk_empleado', 'id');
    }
}

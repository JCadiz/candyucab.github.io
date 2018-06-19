<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficio extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'tipo', 'fk_empleado'
    ];

    public function empleado()
    {
        return $this->belongsTo('App\Empleado', 'fk_empleado', 'id');
    }
}

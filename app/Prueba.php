<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'imagen', 'precio'
    ];
}

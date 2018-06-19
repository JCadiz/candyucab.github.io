<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable = [
        'descripcion', 'porcentaje','fechaInicio','fechaFin'
    ];

    public function pruebaoferta()
    {
        return $this->hasMany('App\Pruebaoferta', 'fk_oferta', 'id');
    }
}

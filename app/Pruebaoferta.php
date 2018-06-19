<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pruebaoferta extends Model
{
    protected $fillable = [
        'porcentaje', 'fk_pruebas', 'fk_oferta'
    ];

    public function prueba()
    {
        return $this->belongsTo('App\Prueba', 'fk_pruebas', 'id');
    }

    public function uofertaser()
    {
        return $this->belongsTo('App\Oferta', 'fk_oferta', 'id');
    }
}

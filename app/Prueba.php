<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'imagen', 'precio'
    ];

    public function pruebaoferta()
    {
        return $this->hasMany('App\Pruebaoferta', 'fk_pruebas', 'id');
    }

    public function facturacion()
    {
        return $this->hasMany('App\pruebas', 'fk_pruebas', 'id');
    }

    public function stock()
    {
        return $this->hasMany('App\Stock', 'fk_pruebas', 'id');
    }


}

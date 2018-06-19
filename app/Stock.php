<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'producto', 'fk_pruebas', 'fk_tienda'
    ];

    public function prueba()
    {
        return $this->belongsTo('App\Prueba', 'fk_pruebas', 'id');
    }

    public function tienda()
    {
        return $this->belongsTo('App\Tienda', 'fk_tienda', 'id');
    }


}

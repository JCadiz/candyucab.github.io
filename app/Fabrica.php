<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabrica extends Model
{
    protected $fillable = [
      'descripcion', 'fk_lugar'
    ];

    public function lugar()
    {
        return $this->belongsTo('App\Lugar', 'fk_lugar', 'id');
    }

    public function pedidos()
    {
        return $this->hasMany('App\Pedido', 'fk_fabrica', 'id');
    }
}

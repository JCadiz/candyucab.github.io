<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'descripcion', 'status','fk_fabrica'
    ];

    public function fabrica()
    {
        return $this->belongsTo('App\Fabrica', 'fk_fabrica', 'id');
    }
}

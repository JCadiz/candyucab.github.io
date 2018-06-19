<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasillo extends Model
{
    protected $fillable = [
        'cantidad', 'fk_tiendas'
    ];

    public function tienda()
    {
        return $this->belongsTo('App\Tienda', 'fk_tienda', 'id');
    }

}

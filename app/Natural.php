<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Natural extends Model
{
    protected $fillable = [
        'rif', 'cedula','nombre','apellido', 'fk_lugar'
    ];

    public function lugar(){
         return $this->belongsTo('App\Lugar', 'fk_lugar', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $fillable = [
        'nombre', 'tipo','fk_lugar'
    ];

    public function lugar(){
         return $this->belongsTo('App\Lugar', 'fk_lugar', 'id');
    }
}

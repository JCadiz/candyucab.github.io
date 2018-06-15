<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carnet extends Model
{
    protected $fillable = [
        'serial', 'fk_natural','fk_juridico','fk_tienda'
    ];

    public function natural(){
         return $this->belongsTo('App\Natural', 'fk_natural', 'id');
    }

    public function juridico(){
         return $this->belongsTo('App\juridico', 'fk_juridico', 'id');
    }

    public function tienda(){
         return $this->belongsTo('App\Tienda', 'fk_tienda', 'id');
    }
}

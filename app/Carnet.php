<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carnet extends Model
{
    protected $fillable = [
        'serial', 'fk_naturals','fk_juridicos','fk_tienda'
    ];

    public function natural(){
         return $this->belongsTo('App\Natural', 'fk_naturals', 'id');
    }

    public function juridico(){
         return $this->belongsTo('App\Juridico', 'fk_juridicos', 'id');
    }

    public function tienda(){
         return $this->belongsTo('App\Tienda', 'fk_tienda', 'id');
    }
}

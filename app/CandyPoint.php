<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandyPoint extends Model
{
    protected $fillable = [
        'cantidad', 'valorActual','fk_natural','fk_juridico'
    ];

    public function natural(){
         return $this->belongsTo('App\Natural', 'fk_natural', 'id');
    }

    public function juridico(){
         return $this->belongsTo('App\Juridico', 'fk_juridico', 'id');
    }
}

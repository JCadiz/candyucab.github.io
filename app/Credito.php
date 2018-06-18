<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    protected $fillable = [
        'numeroC', 'nombreC', 'cv', 'vencimiento','fk_natural', 'fk_juridico'
    ];

    public function natural(){
        return $this->belongsTo('App\Natural', 'fk_natural', 'id');
    }

    public function juridico(){
        return $this->belongsTo('App\Juridico', 'fk_juridico', 'id');
    }
}


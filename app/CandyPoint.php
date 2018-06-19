<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandyPoint extends Model
{
    protected $fillable = [
        'cantidad', 'valorActual','fk_naturals','fk_juridicos'
    ];

    public function natural(){
         return $this->belongsTo('App\Natural', 'fk_naturals', 'id');
    }

    public function juridico(){
         return $this->belongsTo('App\Juridico', 'fk_juridicos', 'id');
    }

    public function historialcandypoint()
    {
        return $this->belongsTo('App\HistorialCandyPoint', 'fk_candypoint', 'id');
    }

}

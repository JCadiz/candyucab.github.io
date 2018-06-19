<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialCandyPoint extends Model
{
    protected $fillable = [
        'nombre', 'tipo', 'fk_candypoint'
    ];

    public function candypoint()
    {
        return $this->belongsTo('App\CandyPoint', 'fk_candypoint', 'id');
    }
}

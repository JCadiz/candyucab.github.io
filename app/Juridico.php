<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juridico extends Model
{
    protected $fillable = [
        'rif', 'paginaWeb','capital','denominacion', 'razonSocial', 'fk_lugar',
    ];

    public function lugar(){
         return $this->belongsTo('App\Lugar', 'fk_lugar', 'id');
    }
    
}

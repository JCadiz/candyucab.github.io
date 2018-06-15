<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable = [
        'cedula', 'nombre','apellido','fk_juridico', 'fk_lugar'
    ];

    public function juridico(){
         return $this->belongsTo('App\Juridico', 'fk_juridico', 'id');
    }

    public function lugar(){
         return $this->belongsTo('App\Lugar', 'fk_lugar', 'id');
    }
}

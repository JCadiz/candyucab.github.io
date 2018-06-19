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

    public function natural()
    {
        return $this->hasMany('App\Natural', 'fk_lugar', 'id');
    }

    public function juridico()
    {
        return $this->hasMany('App\Juridico', 'fk_lugar', 'id');
    }

    public function contacto()
    {
        return $this->hasMany('App\Contacto', 'fk_lugar', 'id');
    }

    public function tienda()
    {
        return $this->hasMany('App\Tienda', 'fk_lugar', 'id');
    }

    public function fabrica()
    {
        return $this->hasMany('App\Fabrica', 'fk_lugar', 'id');
    }

}

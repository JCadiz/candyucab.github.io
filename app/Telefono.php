<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $fillable = [
        'numero', 'fk_naturals', 'fk_juridicos', 'fk_contacto'
    ];

    public function natural()
    {
        return $this->belongsTo('App\Natural', 'fk_naturals', 'id');
    }

    public function juridico()
    {
        return $this->belongsTo('App\Juridico', 'fk_juridicos', 'id');
    }

    public function contacto()
    {
        return $this->belongsTo('App\Contacto', 'fk_contacto', 'id');
    }
}

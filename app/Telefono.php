<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $fillable = [
        'numero', 'fk_natural', 'fk_juridico', 'fk_contacto'
    ];

    public function natural()
    {
        return $this->belongsTo('App\Natural', 'fk_natural', 'id');
    }

    public function juridico()
    {
        return $this->belongsTo('App\Juridico', 'fk_juridico', 'id');
    }

    public function contacto()
    {
        return $this->belongsTo('App\Contacto', 'fk_contacto', 'id');
    }
}

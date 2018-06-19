<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historialcompra extends Model
{
    protected $fillable = [
        'fechacompra', 'producto', 'fk_naturals', 'fk_juridicos'
    ];

    public function facturacion()
    {
        return $this->hasOne('App\Facturacion', 'fk_historialcompra', 'id');
    }

    public function natural()
    {
        return $this->belongsTo('App\Natural', 'fk_naturals', 'id');
    }

    public function juridico()
    {
        return $this->belongsTo('App\Juridico', 'fk_juridicos', 'id');
    }

}

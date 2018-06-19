<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
    protected $fillable = [
        'rif', 'fecha', 'total','fk_pruebas', 'fk_naturals', 'fk_juridicos', 'fk_tienda',
        'fk_historialcompra', 'fk_credito'
    ];

    public function pruebas()
    {
        return $this->belongsTo('App\Prueba', 'fk_pruebas', 'id');
    }

    public function natural()
    {
        return $this->belongsTo('App\Natural', 'fk_naturals', 'id');
    }

    public function tienda()
    {
        return $this->belongsTo('App\Tienda', 'fk_tienda', 'id');
    }

    public function historialcompra()
    {
        return $this->belongsTo('App\Historialcompra', 'fk_historialcompra', 'id');
    }

    public function credito()
    {
        return $this->belongsTo('App\Credito', 'fk_credito', 'id');
    }

    public function facturacionstatus()
    {
        return $this->hasMany('App\Facturacionstatus', 'fk_facturacion', 'id');
    }

}

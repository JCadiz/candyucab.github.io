<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturacionstatus extends Model
{
    protected $fillable = [
        'fk_facturacion', 'fk_status'
    ];

    public function facturacion()
    {
        return $this->belongsTo('App\Facturacion', 'fk_facturacion', 'id');
    }

    public function status()
    {
        return $this->belongsTo('App\Statuscompra', 'fk_status', 'id');
    }
}

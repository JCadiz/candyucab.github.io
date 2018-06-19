<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statuscompra extends Model
{
    protected $fillable = [
        'descripcion', 'status'
    ];

    public function facturacionstatus()
    {
        return $this->hasMany('App\Facturacionstatus', 'fk_status', 'id');
    }
}

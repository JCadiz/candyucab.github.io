<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    protected $fillable = [
        'fk_naturals', 'fk_juridicos'
    ];

    public function natural()
    {
        return $this->belongsTo('App\Natural', 'fk_naturals', 'id');
    }

    public function juridico()
    {
        return $this->belongsTo('App\Juridico', 'fk_juridicos', 'id');
    }

}

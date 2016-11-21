<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{


    public function tipoPago()
    {
        return $this->belongsTo('App\Model\TipoPago');
    }


    public function tipoTrabajo()
    {
        return $this->belongsTo('App\Model\TipoTrabajo');
    }

}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{


    public function tipoPago()
    {
        return $this->belongsTo('App\Model\TipoAtencion','tipo_atencion_id');
    }

    public function estado()
    {
        return $this->belongsTo('App\Model\Estado','estado_id');
    }

    public function tipoPorRealizar()
    {
        return $this->belongsTo('App\Model\TrabajoRealizar','trabajo_realizar_id');
    }

    public function taller()
    {
        return $this->belongsTo('App\Model\Taller','taller_id');
    }

    public function gasfiter()
    {
        return $this->belongsTo('App\Model\Gasfitero','gasfitero_id');
    }

    public function servicio_realizado()
    {
        return $this->belongsTo('App\Model\ServicioRealizado','servicio_realizado_id');
    }


    public function cliente()
    {
        return $this->belongsTo('App\Model\Cliente','cliente_id');
    }

}

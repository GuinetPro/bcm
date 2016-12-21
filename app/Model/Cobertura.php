<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cobertura extends Model
{
    protected $table = 'cobertura_taller';

	protected $fillable = ['comuna_id','taller_id','kilometro','comentario','valor_visita','tipo_sat'];
}

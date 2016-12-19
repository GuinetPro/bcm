<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
	protected $fillable = ['nombre','email','telefono','movil','comentario','taller_id','user_id'];

    protected $table = 'tecnicos';
}

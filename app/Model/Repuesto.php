<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Repuesto extends Model
{
    protected $table = 'repuestos';

	protected $fillable = ['id','nombre','precio','codigo','stock','comentario'];
           
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $fillable = ['numero','comentario','cliente_id','principal'];

}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gasfitero extends Model
{

    protected $fillable = ['nombre','email','telefono','movil','comentario','taller_id'];

    protected $table = 'gasfiteros';


  	public function categoria()
    {
       
        return $this->belongsTo('App\Model\Categoria','categoria_id');
    }

}

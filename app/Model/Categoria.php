<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    public function tipoProductos(){
        return $this->hasMany('App\Model\TipoProducto');
    }
}

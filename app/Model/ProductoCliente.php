<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductoCliente extends Model
{
	protected $fillable = ["producto_id", "cliente_id","direccion_id"];
    /**
     * Relaciones
     */
    
    
    protected $table = 'producto_cliente';

    public function direccion()
    {
        return $this->hasOne('App\Model\Direccion');
    }
}

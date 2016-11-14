<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	protected $fillable = ['nombre','precio','codigo','categoria_id','marca_id','modelo_id','tipo_gas_id','tiro_id','litraje_id','lugar_compra','fecha_compra'];


	/**
	 * Relaciones
	 * @return relacion uno a uno
	 */
  	public function categoria()
    {
        return $this->hasOne('App\Model\Categoria');
    }

    public function marca()
    {
        return $this->hasOne('App\Model\Marca');
    }

      public function modelo()
    {
        return $this->hasOne('App\Model\Modelo');
    }

      public function tipoGas()
    {
        return $this->hasOne('App\Model\TipoGas');
    }

      public function tiro()
    {
        return $this->hasOne('App\Model\Tiro');
    }

      public function litraje()
    {
        return $this->hasOne('App\Model\Litraje');
    }


   public function productoClientes(){
        return $this->hasMany('App\Model\ProductoCliente');
    }


    public function clientes(){
        return $this->belongsToMany('App\Model\Cliente','producto_cliente');
    }


}

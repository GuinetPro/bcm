<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	protected $fillable = ['nombre','precio','codigo','categoria_id','marca_id','modelo_id','tipo_gas_id','tiro_id','litraje_id','lugar_compra','fecha_compra','tipo_planta_id','tipo_especificacion_id'];


	/**
	 * Relaciones
	 * @return relacion uno a uno
	 */
  	public function categoria()
    {
       
        return $this->belongsTo('App\Model\Categoria','categoria_id');
    }

    public function marca()
    {
        return $this->belongsTo('App\Model\Marca','marca_id');
    }

      public function modelo()
    {
        return $this->belongsTo('App\Model\Modelo','modelo_id');
    }

      public function planta()
    {
        return $this->belongsTo('App\Model\TipoPlanta','tipo_planta_id');
    }

      public function especificacion()
    {
        return $this->belongsTo('App\Model\TipoEspecificacion','tipo_especificacion_id');
    }

      public function tipoproducto()
    {
        return $this->belongsTo('App\Model\TipoProducto','tipo_producto_id');
    }
      public function tipoGas()
    {
        return $this->belongsTo('App\Model\TipoGas','tipo_gas_id');
    }

      public function tiro()
    {
        return $this->belongsTo('App\Model\Tiro','tiro_id');
    }

      public function litraje()
    {
        return $this->belongsTo('App\Model\Litraje','litraje_id');
    }


   public function productoClientes(){
        return $this->hasMany('App\Model\ProductoCliente');
    }


    public function clientes(){
        return $this->belongsToMany('App\Model\Cliente','producto_cliente');
    }


}

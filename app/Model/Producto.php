<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	protected $fillable = ['nombre','precio','codigo','categoria_id','marca_id','modelo_id','tipo_gas_id','tiro_id','litraje_id','lugar_compra','fecha_compra'];

}

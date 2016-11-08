<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB; 


class Direccion extends Model
{

	  /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'direcciones';


    protected $fillable = ['comuna_id','departamento','calle','telefono','numero','cliente_id','comentario','latitud','longitud'];


    public static function updateData($response,$id_cliente){

    	$direcciones =  $response->dir;

    	
    }
}

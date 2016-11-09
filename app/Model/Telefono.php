<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB; 


class Telefono extends Model
{
    protected $fillable = ['numero','comentario','cliente_id','principal'];


    public static function updateData($response,$id_cliente){

    	$telefonos   = $response->tel;
		// Start transaction!
		DB::beginTransaction();

		try {
				  
			for ($i = 0; $i < sizeof($telefonos["numero"]); $i++) {

				 $telefono = Telefono::find( (int)$telefonos["id"][$i]);

				 if( !$telefono){
				 	$telefono = new Telefono;
				 }
					
				$telefono->numero 	  = $telefonos["numero"][$i];
				$telefono->cliente_id = $id_cliente;
				$telefono->principal  = ($telefonos["prin"][$i])?1:0;
				$telefono->comentario = $telefonos["desc"][$i];

				$telefono->save();
					
			}

		} catch(ValidationException $e)
		{
			 DB::rollback();
			 return  $e->getErrors();

		} catch(\Exception $e)
		{
			DB::rollback();
			throw $e;
		}

		DB::commit();
		return true;

    }

}

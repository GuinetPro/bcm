<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB; 

class Cliente extends Model
{	
	protected $fillable = ['nombre','apellidoPaterno','apellidoMaterno','rut','email','comentario'];


	/**
	 * Relaciones
	 */
	
	public function direcciones(){
        return $this->hasMany('App\Model\Direccion');
    }


    public function telefonos(){
        return $this->hasMany('App\Model\Telefono');
    }


	public function productoClientes(){
        return $this->hasMany('App\Model\ProductoCliente');
    }


    public function productos(){
        return $this->belongsToMany('App\Model\Producto','producto_cliente');
    }


	/**
	 * Funciones Propias del modelo 
	*/

   
    // Guardamos el cliente con los teelfonos y sus direcciones
     
    public static function saveData($response){

    		
    	$telefonos   = $response->tel;

    	$direcciones =  $response->dir;

		// Start transaction!
		DB::beginTransaction();

			try {
				$cliente = Cliente::create([
					'nombre' => $response->nombre,
					'apellidoPaterno' => $response->apellidoPaterno,
					'apellidoMaterno' => $response->apellidoMaterno,
					'rut' => $response->rut,
					'email' => $response->email,
					'comentario' => $response->comentario
				]);

			} catch(ValidationException $e)
			{
			    DB::rollback();
			    return  $e->getErrors();

			} catch(\Exception $e)
			{
			    DB::rollback();
			    throw $e;
			}

			try {
				  
				for ($i = 0; $i < sizeof($telefonos["numero"]); $i++) {

					Telefono::create([
					    'numero' => $telefonos["numero"][$i],
					    'cliente_id' => $cliente->id,
					    'principal' => ($telefonos["prin"][$i])?1:0,
					    'comentario' => $telefonos["desc"][$i],
					]);
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

			try {
				  

				for ($x = 0; $x < sizeof($direcciones["numero"]); $x++) {

					Direccion::create([

					        'comuna_id'     => $direcciones["comuna"][$x],
					        'departamento'  => $direcciones["dpt"][$x],
					        'calle' 	 => $direcciones["interior"][$x]." ".$direcciones["calle"][$x],
					        'telefono'   => $direcciones["telefono"][$x],
					        'numero' 	 => $direcciones["numero"][$x],
					        'cliente_id' => $cliente->id,
					        'comentario' => "",
					        'latitud' 	 => "",
							'longitud' 	 => "",
					]);
				}

			} catch(ValidationException $e)
			{
			    DB::rollback();
			    return  false;

			} catch(\Exception $e)
			{
			    DB::rollback();
			    throw $e;
			}

		DB::commit();
		return true;

    }



}

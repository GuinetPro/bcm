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


        // Start transaction!
        DB::beginTransaction();

        try {
                  
            for ($i = 0; $i < sizeof($direcciones["comuna_id"]); $i++) {

                 $direccion = Direccion::find( (int)$direcciones["id"][$i]);

                 if( !$direccion){
                    $direccion = new Direccion;
                 }
            
                $direccion->comuna_id     = $direcciones["comuna_id"][$i];
                $direccion->departamento  = $direcciones["dpt"][$i];
                $direccion->calle         = $direcciones["interior"][$x]." ".$direcciones["calle"][$x];
                $direccion->numero        = $direcciones["numero"][$i];
                $direccion->cliente_id    = $direcciones["cliente_id"][$i];
                $direccion->comentario    = $direcciones["comentario"][$i];
                $direccion->latitud       = $direcciones["latitud"][$i];
                $direccion->longitud      = $direcciones["longitud"][$i];

                $direccion->save();
                    
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


    /** 
     * Relaciones
     * @return [type] [description]
     */
     public function comuna()
    {
        return $this->belongsTo('App\Model\Comuna');
    }
}

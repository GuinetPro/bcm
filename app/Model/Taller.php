<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\User;
use DB; 

class Taller extends Model
{
    protected $fillable = [ 'nombre' ,'razon_social'  ,'codigo_sap' ,'email','telefono' ,'movil' ,'direccion'  ,'descuento'  ,'comentario' ,'comuna_id' ,'user_id',"bonificacion"  ,"kilometro" ,"calefones" ,"termos_electricos" ,"calderas" ,"aire_acondicionado" ,"estufas","solar"  ,"eficiencia_energetica" ,'rut','region_id'];
                  
    protected $table = 'talleres';

     /** 
     * Relaciones
     * @return [type] [description]
     */
     public function comuna()
    {
        return $this->belongsTo('App\Model\Comuna');
    }


     /** 
     * Relaciones
     * @return [type] [description]
     */
     public function region()
    {
        return $this->belongsTo('App\Model\Region');
    }


    /** 
     * Relaciones
     * @return [type] [description]
     */
     public function usuario()
    {
        return $this->belongsTo('App\Model\User');
    }


    public function gasfiteros(){
        return $this->hasMany('App\Model\Gasfitero');
    }


    public function coberturas(){
        return $this->hasMany('App\Model\Cobertura');
    }

    public function tecnicos(){
        return $this->hasMany('App\Model\Tecnico');
    }


    public static function saveData($response){

            
        $coberturas   = $response->co;
         $region =  json_decode($response->region_id);


        // Start transaction!
        DB::beginTransaction();

            try {
                $taller = Taller::create([
                    'nombre' => $response->nombre,
                    'razon_social' => $response->razon_social,
                    'codigo_sap' => $response->Codigo_Sap,
                    'email' => $response->email,
                    'rut' => $response->rut,
                    'telefono' => $response->telefono,
                     "movil"  => $response->movil,
                     "direccion"  => $response->direccion,
                     "comuna_id"  => $response->comuna_id,
                     "region_id"  => $region->id,
                     "user_id"          => User::find(0)->id,
                     "descuento"   => $response->descuento,
                     "bonificacion"  => $response->bonificacion,
                     "kilometro"  => $response->kilometro,
                     "calefones"  => $response->calefones,
                     "termos_electricos"   => $response->termos_electricos,
                     "calderas"  => $response->calderas,
                     "aire_acondicionado" => $response->aire_acondicionado,
                     "estufas"   => $response->estufas,
                     "solar"   => $response->solar,
                     "eficiencia_energetica"  => $response->eficiencia_energetica
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
                  

                for ($x = 0; $x < sizeof($coberturas["comuna_id"]); $x++) {

                    Cobertura::create([                       
                        'comuna_id'     => $coberturas["comuna_id"][$x],
                        'kilometro'     => $coberturas["kilometro"][$x],       
                        'valor_visita'  => $coberturas["valor_visita"][$x],                       
                        'tipo_sat'      => $coberturas["tipo_sat"][$x],
                        'respuesta'     => $coberturas["respuesta"][$x],
                        'taller_id'     => $taller->id,
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

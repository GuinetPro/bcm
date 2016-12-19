<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    protected $fillable = [ 'nombre' ,'razon_social'  ,'codigo_sap' ,'email','telefono' ,'movil' ,'direccion'  ,'decuento'  ,'comentario' ,'comuna_id' ,'user_id' ];

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
     public function usuario()
    {
        return $this->belongsTo('App\Model\User');
    }


    public function gasfiteros(){
        return $this->hasMany('App\Model\Gasfitero');
    }


    public function tecnicos(){
        return $this->hasMany('App\Model\Tecnico');
    }


}

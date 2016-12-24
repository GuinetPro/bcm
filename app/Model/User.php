<?php

namespace App\Model;
use App\Model\Taller;
use App\Model\Rol;
use App\Model\Tecnico;
use DB; 
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'email', 'password','rol_id',"username"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function rol()
    {
        return $this->belongsTo('App\Model\Rol','rol_id');
    }

    public function saveData($request,$user){
        
        $talleresAsociado = $request->asoc;
        // Start transaction!
        DB::beginTransaction();

            try {

                $user->username         = $request->username;
                $user->nombre           = $request->nombre;
                $user->apellidoPaterno  = $request->apellidoPaterno;
                $user->apellidoMaterno  = $request->apellidoMaterno;
                $user->email            = $request->email;
                $user->rol_id           = Rol::find($request->rol_id)->id;
                $user->password         = bcrypt($request->password);
                $user->password         = bcrypt($request->remember_token);
                $user->save();

            } catch(ValidationException $e)
            {
                DB::rollback();
                return false;

            } catch(\Exception $e)
            {
                DB::rollback();
                return false;
            }

            try {
                  

                if( $request->rol_id == 4 ){

                    $taller = Taller::find($request->taller_id);
                    $taller->user_id = $user->id;
                    $taller->save();
                }else{

                    $taller = Taller::find($request->taller_id);
                    $taller->delete();
                }

            } catch(ValidationException $e)
            {
                DB::rollback();
                return  false;

            } catch(\Exception $e)
            {
                DB::rollback();
                return false;
            }


            try {
                  

                if( $request->rol_id == 3 ){

                    $talleresAsociado = $request->asoc;

                    for ($x = 0; $x < sizeof($talleresAsociado["id"]); $x++) {

                        $tecnico = new Tecnico;            
                        $tecnico->nombre     = $request->username;
                        $tecnico->email      = $request->email;
                        $tecnico->telefono   = "";
                        $tecnico->movil      = "";
                        $tecnico->taller_id  = $talleresAsociado["id"][$x];
                        $tecnico->user_id    = $user->id;
                        $tecnico->save();
                    }

                }

            } catch(ValidationException $e)
            {
                DB::rollback();
                return  false;

            } catch(\Exception $e)
            {
                DB::rollback();
                return false;
            }

 
        DB::commit();
        return true;
    }

}

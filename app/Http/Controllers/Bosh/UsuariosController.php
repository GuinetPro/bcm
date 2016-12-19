<?php

namespace App\Http\Controllers\Bosh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\Rol;
use App\Http\Requests\UserRequest;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $usuarios = User::all();
    
         return view("bosh.usuarios.index",["usuarios" => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Rol::pluck('nombre', 'id')->prepend('Selecciona un Rol','');
        $user =  new User;

        return view("bosh.usuarios.create",[
                                        "user"      => $user,
                                        "roles" => $roles
                                        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User;
        $user->username         = $request->username;
        $user->nombre           = $request->nombre;
        $user->apellidoPaterno  = $request->apellidoPaterno;
        $user->apellidoMaterno  = $request->apellidoMaterno;
        $user->email            = $request->email;
        $user->rol_id           = Rol::find($request->rol_id)->id;
        $user->password         = bcrypt($request->password);
        $user->password         = bcrypt($request->remember_token);

        if( $user->save() ){
            \Flash::success('Usuario Creado con Exito.'); //<--FLASH MESSAGE
                return redirect("bosh/usuarios");
        }else{
            return view("bosh.usuarios.create",["taller" => $taller,'user' => $user]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user        = User::find($id);
        return view("bosh.gasfiteros.show",["user" => $user ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Rol::pluck('nombre', 'id')->prepend('Selecciona un Rol','');
        $user        = User::find($id);

        return view("bosh.usuarios.edit",[
                                        "user"  => $user,
                                        "roles" => $roles
                                        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->username         = $request->username;
        $user->nombre           = $request->nombre;
        $user->apellidoPaterno  = $request->apellidoPaterno;
        $user->apellidoMaterno  = $request->apellidoMaterno;
        $user->email            = $request->email;
        $user->rol_id           = Rol::find($request->rol_id)->id;
        $user->password         = bcrypt($request->password);
        $user->password         = bcrypt($request->remember_token);

        if( $user->save() ){
            \Flash::success('Usuario Creado con Exito.'); //<--FLASH MESSAGE
                return redirect("bosh/usuarios");
        }else{
            return view("bosh.usuarios.create",["taller" => $taller,'user' => $user]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

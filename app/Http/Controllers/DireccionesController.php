<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Direccion;

class DireccionesController extends Controller
{


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $direcciones = Direccion::where('cliente_id',$id)->get();
         return response()->json($direcciones);
    }

}

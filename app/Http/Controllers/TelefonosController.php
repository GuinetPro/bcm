<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Telefono;

class TelefonosController extends Controller
{


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $telefonos = Telefono::where('cliente_id',$id)->get();
         return response()->json($telefonos);
    }


}

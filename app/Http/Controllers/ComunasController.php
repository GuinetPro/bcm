<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Comuna;

class ComunasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $comunas = Comuna::all();
         return response()->json($comunas);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $comunas = Comuna::where('region_id',$id)->get();
         return response()->json($comunas);
    }

 
}

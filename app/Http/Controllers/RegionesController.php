<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Region;

class RegionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
         $regiones = Region::all();
         return response()->json($regiones);
    }

}

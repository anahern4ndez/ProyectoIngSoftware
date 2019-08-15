<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tiposCitas;
use DB;

class tipoCitasController extends Controller
{
    /**
     * crea una tupla nueva.
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    function store(Request $request){
        $tipoCita = new tiposCitas;
        $tipoCita->id = $request->id;
        $tipoCita->tipoCita = $request->tipoCita;
        $tipoCita->save();

        return response()->json([
            'success' => true,
            'message' => 'creado'
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;

class ComentarioController extends Controller
{
    /**
     * crea una tupla nueva.
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    function store(Request $request){
        /*Paciente::create(Request::all());
        return 'true';*/
        $comentario = new comentario;
        $comentario->cui = $request->cui;
        $comentario->comentarios = $request->comentarios;
        $comentario->save();

        return response()->json([
            'success' => true,
            'message' => 'Comentario creado'
        ], 200);
    }

    function findAll(Request $request){
        $cuir = $request->CUI;
        $val = comentario::where('cui', $cuir)->with('cui')->get();

        return response()->json([
            'Comentarios' => $val,
        ], 200);
        
    }
}

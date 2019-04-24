<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;

class EstadoController extends Controller
{
    /**
     * crea una tupla nueva.
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    function insert(Request $request){
        $estado = new Estado;
        $estado->id = $request->id;
        $estado->significado = $request->significado;
        $estado->save();

        $val = Estado::all();
        return response()->json([
            'success' => true,
            'Estados' => $val
        ], 200);
    }
    /**
     * busca segun id (pasado por URL)
     * @param int id
     * @return obj asignado a variable con info de query.
     */
    function find($id){
        $val = Estado::find($id);
        return response()->json([
            'success' => true,
            'Estados' => $val
        ], 200);
    }

    function getEstado(){
        $val = Estado::all();
        return response()->json([
            'success' => true,
            'Estados' => $val
        ], 200);
    }
    /**
     * hace update a todos los properties del elemento
     * @param int id
     * @param \Illuminate\Http\Request 
     * @return null value
     */
    function update(Request $request, $id){
        $toUpdate = Estado::find($id);
        //pedira todos los datos, por ahora..
        $toUpdate-> update(Request::all());

    }
    /**
     * elimina objeto en busqueda bajo id del elemento.
     * @param id parametro de busqueda para borrar
     * @param \Illuminate\Http\Request
     * @return null value.
     */
    function destroy(Request $request, $id){
        $val = Estado::find($id)->delete();
    }
}

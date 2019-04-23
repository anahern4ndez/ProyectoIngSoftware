<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Paciente;

class PacienteController extends Controller
{
    /**
     * crea una tupla nueva.
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    function insert(Request $request){
        Paciente::create(Request::all());
        return 'true';
    }

    /**
     * busca segun id (pasado por URL)
     * @param int id
     * @return obj asignado a variable con info de query.
     */
    function find($id){
        $val = Paciente::find($id);
        return response()->json([
            'success' => true,
            'Pacientes' => $val
        ], 200);
    }
    /**
     * hace update a todos los properties del elemento
     * @param int id
     * @param \Illuminate\Http\Request 
     * @return null value
     */
    function update(Request $request, $id){
        $toUpdate = Paciente::find($id);
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
        $val = Paciente::find($id)->delete();
    }
}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consulta;

class ConsultaController extends Controller
{
    /**
     * crea una tupla nueva.
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    function store(Request $request){
        /*Paciente::create(Request::all());
        return 'true';*/
        $consulta = new Consulta;
        $consulta->cui = $request->cui;
        $consulta->fecha = $request->fecha;
        $consulta->peso = $request->peso;
        $consulta->talla = $request->talla;
        $consulta->pa = $request->pa;
        $consulta->historia = $request->historia;
        $consulta->sindrome_clinico = $request->sindrome_clinico;
        $consulta->psicosocial = $request->psicosocial;
        $consulta->nutricion = $request->nutricion;
        $consulta->plan_medico = $request->plan_medico;
        $consulta->plan_psicosocial = $request->plan_psicosocial;
        $consulta->plan_nutricional = $request->plan_nutricional;
        $consulta->plan_farmacologico = $request->plan_farmacologico;
        $consulta->id_imagenes_lab = $request->id_imagenes_lab;
        $consulta->laboratorio = $request->laboratorio;
        $consulta->resultados_laboratorio = $request->resultados_laboratorio;
        $consulta->medicamento = $request->medicamento;
        $consulta->proxima_visita = $request->proxima_visita;
        $consulta->save();

        return response()->json([
            'success' => true,
            'message' => 'Consulta creada'
        ], 200);
    }

    /**
     * busca segun id (pasado por URL)
     * @param int id
     * 
     * @return obj asignado a variable con info de query.
    */
    function findOne(Request $request){
        $cuir = $request->CUI;
        
        $consulta = Consulta::where('cui', $cuir)->with('cui')->get();
        //$val = Paciente::find('3006266730101');
        return response()->json([
            'success' => true,
            'Consulta' => $consulta
        ], 200);
    }

    function findAll(){
        //$val = Paciente::all();
        $val = Consulta::with('cui')->get();

        return response()->json([
            'Consultas' => $val,
        ], 200);
        
    }

    /**
     * elimina objeto en busqueda bajo id del elemento.
     * @param id parametro de busqueda para borrar
     * @param \Illuminate\Http\Request
     * @return null value.
     */
    public function delete(Request $request)
    {
        (string)$CUI = $request->cui;
        $user=Consulta::find($CUI);
        $user->delete();
        return response()->json([
            'success' => true,
            'message' => 'eliminado'
        ], 200);
    }
}

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
        
        $consulta = new Consulta;

        $consulta->cui = $request->cui;
        $consulta->fecha = $request->fecha;
        $consulta->peso = $request->peso;
        $consulta->talla = $request->talla;
        $consulta->pa = $request->pa;
        $consulta->sindrome_clinico = $request->sindrome_clinico;
        $consulta->Dx_Definitivo = $request->Dx_Definitivo;
        $consulta->Dx_Asociados = $request->Dx_Asociados;
        $consulta->historia = $request->historia;
        $consulta->medicamento = $request->medicamento;
        $consulta->resultados_laboratorio = $request->resultados_laboratorio;
        $consulta->examen_fisico = $request->examen_fisico;
        $consulta->evaluacion_medica = $request->evaluacion_medica;
        $consulta->plan_medico = $request->plan_medico;
        $consulta->evaluacion_psicologica = $request->evaluacion_psicologica;
        $consulta->plan_psicologico = $request->plan_psicologico;
        $consulta->evaluacion_trabajo_social = $request->evaluacion_trabajo_social;
        $consulta->plan_trabajo_social = $request->plan_trabajo_social;
        $consulta->evaluacion_nutricional = $request->evaluacion_nutricional;
        $consulta->plan_nutricional = $request->plan_nutricional;
        $consulta->evaluacion_farmacologica = $request->evaluacion_farmacologica;
        $consulta->plan_farmacologico = $request->plan_farmacologico;

        // DB::select('exec insertConsulta(
        //         "$consulta->cui",
        //         "$consulta->fecha",
        //         "$consulta->peso",
        //         "$consulta->talla",
        //         "$consulta->pa",
        //         "$consulta->sindrome_clinico",
        //         "$consulta->Dx_Definitivo",
        //         "$consulta->Dx_Asociados",
        //         "$consulta->historia",
        //         "$consulta->medicamento",
        //         "$consulta->resultados_laboratorio",
        //         "$consulta->examen_fisico",
        //         "$consulta->evaluacion_medica",
        //         "$consulta->plan_medico",
        //         "$consulta->evaluacion_psicologica",
        //         "$consulta->plan_psicologico",
        //         "$consulta->evaluacion_trabajo_social",
        //         "$consulta->plan_trabajo_social",
        //         "$consulta->evaluacion_nutricional",
        //         "$consulta->plan_nutricional",
        //         "$consulta->evaluacion_farmacologica",
        //         "$consulta->plan_farmacologico"
        //     )');
        
        // $consulta->id_imagenes_lab = $request->id_imagenes_lab;
        
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

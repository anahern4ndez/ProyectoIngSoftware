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

        // $consulta->id_imagenes_lab = $request->id_imagenes_lab;
        
        $consulta->save();

        return response()->json([
            'success' => true,
            'message' => 'Consulta creada'
        ], 200);
    }

    function updateAll(Request $request){
        $cui = $request->cui;
        $fecha = $request->fecha;

        $toUpdate = Consulta::where([['cui', '=', $cui], ['fecha', '=', $fecha]])->first();

        $toUpdate->peso = $request->peso;
        $toUpdate->talla = $request->talla;
        $toUpdate->pa = $request->pa;
        $toUpdate->sindrome_clinico = $request->sindrome_clinico;
        $toUpdate->Dx_Definitivo = $request->Dx_Definitivo;
        $toUpdate->Dx_Asociados = $request->Dx_Asociados;
        $toUpdate->historia = $request->historia;
        $toUpdate->medicamento = $request->medicamento;
        $toUpdate->resultados_laboratorio = $request->resultados_laboratorio;
        $toUpdate->examen_fisico = $request->examen_fisico;
        $toUpdate->evaluacion_medica = $request->evaluacion_medica;
        $toUpdate->plan_medico = $request->plan_medico;
        $toUpdate->evaluacion_psicologica = $request->evaluacion_psicologica;
        $toUpdate->plan_psicologico = $request->plan_psicologico;
        $toUpdate->evaluacion_trabajo_social = $request->evaluacion_trabajo_social;
        $toUpdate->plan_trabajo_social = $request->plan_trabajo_social;
        $toUpdate->evaluacion_nutricional = $request->evaluacion_nutricional;
        $toUpdate->plan_nutricional = $request->plan_nutricional;
        $toUpdate->evaluacion_farmacologica = $request->evaluacion_farmacologica;
        $toUpdate->plan_farmacologico = $request->plan_farmacologico;

        $toUpdate->save();
    }

    /**
     * busca segun id (pasado por URL)
     * @param int id
     * 
     * @return obj asignado a variable con info de query.
    */
    function findOne(Request $request){
        $cuir = $request->cui;
        $fecha = $request->fecha;
        
        $consulta = Consulta::where([['cui', '=', $cuir], ['fecha', '=', $fecha]])->get();
        
        if(count($consulta) > 0){
            return response()->json([
                'success' => true,
                'Consulta' => $consulta
            ], 200);
        }else{
            return response()->json([
                'success' => false
            ], 200);
        }
        
    }

    function getIDConsulta(Request $request){
        $cuir = $request->cui;
        $fecha = $request->fecha;

        $consulta = Consulta::select('id')->where([['cui', '=', $cuir], ['fecha', '=', $fecha]])->get();

        return response()->json([
            'success' => true,
            'id' => $consulta[0]->id
        ], 200);
    }

    function findAll(Request $request){
        
        $cuir = $request->cui;
        $fecha = $request->fecha;

        $consulta = Consulta::where([['cui', '=', $cuir], ['fecha', '=', $fecha]])->get();

        return response()->json([
            'Consulta' => $consulta,
        ], 200);
        
    }

    function findAllUser(Request $request){
        
        $cui = $request;

        $consulta = Consulta::all();
        return response()->json([
            'success' => true,
            'Consulta' => $consulta,
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

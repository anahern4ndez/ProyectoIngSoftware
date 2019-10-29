<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacuna;

class vacunaController extends Controller
{
    /**
     * crea una tupla nueva.
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    function store(Request $request){
        
        $vacuna = new Vacuna;

        $vacuna->idPaciente = $request->idPaciente;
        $vacuna->BCG = $request->BCG;
        $vacuna->Poliovirus = $request->Poliovirus;
        $vacuna->HepatitisA = $request->HepatitisA;
        $vacuna->HepatitisB = $request->HepatitisB;
        $vacuna->Neumococo = $request->Neumococo;
        $vacuna->Influenza = $request->Influenza;
        $vacuna->DPT = $request->DPT;
        $vacuna->SPR = $request->SPR;
        
        $vacuna->save();

        return response()->json([
            'success' => true,
            'message' => 'vacuna creada'
        ], 200);
    }

    function updateAll(Request $request){
        $cui = $request->idPaciente;
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
}

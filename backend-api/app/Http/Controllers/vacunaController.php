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

        $vacuna->fecha = $request->fecha;
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

        $toUpdate = Vacuna::where([['idPaciente', '=', $cui], ['fecha', '=', $fecha]])->first();

        $toUpdate->idPaciente = $request->idPaciente;
        $toUpdate->BCG = $request->BCG;
        $toUpdate->Poliovirus = $request->Poliovirus;
        $toUpdate->HepatitisA = $request->HepatitisA;
        $toUpdate->HepatitisB = $request->HepatitisB;
        $toUpdate->Neumococo = $request->Neumococo;
        $toUpdate->Influenza = $request->Influenza;
        $toUpdate->DPT = $request->DPT;
        $toUpdate->SPR = $request->SPR;

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

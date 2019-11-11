<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hemodialisis;
use App\singleTableHemodialisis;
class HemodialisisController extends Controller
{
    public function store(Request $request){
        $Hemodialisis = new Hemodialisis;
        $Hemodialisis->idPaciente = $request->idPaciente;
        $Hemodialisis->FechaHemodialisis = $request->todaysDate;
        $Hemodialisis->NoHemodialisis = $request->Numero;
        $Hemodialisis->LugarDeProcedencia = $request->Procedencia;
        $Hemodialisis->TipoDeHemodialisis = $request->Hemodialisis;
        $Hemodialisis->Via = $request->Via;
        $Hemodialisis->LineasPediatrica = $request->Lineas_pediatricas;
        $Hemodialisis->Filtro = $request->Filtro;
        $Hemodialisis->FlujoDeSangre = $request->Flujo_sangre;
        $Hemodialisis->FlujoDializante = $request->Flujo_dializante;
        $Hemodialisis->UF = $request->UF;
        $Hemodialisis['Via'] = json_encode($request->Via);
        $Hemodialisis['Heparinizacion'] = json_encode($request-> Heparinizacion);
        $Hemodialisis['Tiempo'] = json_encode($request->Tiempo);
        $Hemodialisis['Conductividad'] = json_encode($request->Conductividad);
        $Hemodialisis->PesoPre = $request->Peso_pre;
        $Hemodialisis->PesoPost = $request->Peso_post;
        $Hemodialisis->Talla = $request->Talla;
        $Hemodialisis->PesoDelta = $request->Peso_delta;
        $Hemodialisis->Especiales = $request->Especiales;
        
        $Hemodialisis->Observaciones = $request->Observaciones;
        /*$Hemodialisis->Tecnico = $request->Tecnico;*/
        $Hemodialisis->save();

        return response()->json([
            'success' => true
        ], 200);
    }
    public function storeTable(Request $request){
        $register = new singleTableHemodialisis;
        $register->idPaciente = $request->idPaciente;
        $register->P_A = $request->P_A;
        $register->Pulso = $request->Pulso;
        $register->Temp = $request->Temp;
        $register->QB = $request->QB;
        $register->PV = $request->PV;
        $register->PA = $request->PA;
        $register->UFH = $request->UFH;
        $register->Medicamentos = $request->Medicamentos;
        $register->save();
        return response()->json([
            'success' => true
        ], 200);
    }

    public function lookHemo(Request $request){
        $receivedID = $request['idPaciente'];
        $receivedDate = $request['fecha'];
        $bodyContent= $request->getContent();
        $register = singleTableHemodialisis::all();

        return response()->json([
            'success' => true,
            'hemodialisis' => $register
        ], 200);
    }

    public function findAllUser(Request $request){
        
        $id = $request->id;

        $consulta = Hemodialisis::where([['idPaciente', '=', $id],])->get();

        return response()->json([
            'id'=> $id,
            'success' => true,
            'Consulta' => $consulta
        ], 200);
        
    }
}

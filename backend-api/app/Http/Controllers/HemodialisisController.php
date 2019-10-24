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
        //$Via = $request->Via;
        //$Hemodialisis['Via'] = json_encode($Via);
        $Hemodialisis->Via = $request->Via;
        $Hemodialisis->LineasPediatrica = $request->Lineas_pediatricas;
        $Hemodialisis->Filtro = $request->Filtro;
        $Hemodialisis->FlujoDeSangre = $request->Flujo_sangre;
        $Hemodialisis->FlujoDializante = $request->Flujo_dializante;
        $Hemodialisis->UF = $request->UF;
        //$Hemodialisis->Heparinizacion_de_cebado = $request->Heparinizacion;
        //$Hemodialisis->Heparinizacion_TransDialisis = $request->Heparinizacion_TransDialisis;
        $Hemodialisis->Heparinizacion = $request->Heparinizacion;
        $Hemodialisis->TiempoH = $request->TiempoH;
        $Hemodialisis->TiempoM = $request->TiempoM;
        $Hemodialisis->Conductividad_Na = $request->Conductividad_Na;
        $Hemodialisis->Conductividad_K = $request->Conductividad_K;
        $Hemodialisis->Conductividad_HCO3 = $request->Conductividad_HCO3;
        $Hemodialisis->PesoPre = $request->Peso_pre;
        $Hemodialisis->PesoPost = $request->Peso_post;
        $Hemodialisis->Talla = $request->Talla;
        $Hemodialisis->PesoDelta = $request->Peso_delta;
        $Hemodialisis->Especiales = $request->Especiales;
        
        $Hemodialisis->Observaciones = $request->Observaciones;
        /*$Hemodialisis->Tecnico = $request->Tecnico;
        $Hemodialisis->PA = $request->PA;*/
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
}

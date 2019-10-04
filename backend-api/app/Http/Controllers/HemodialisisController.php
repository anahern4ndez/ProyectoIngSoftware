<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hemodialisis;
class HemodialisisController extends Controller
{
    //
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
        $Hemodialisis->Fecha_col_cat = $request->Fecha_col_cat;


        //tabla 1
        /*$Hemodialisis->PAstr = $request->PAstr;
        $Hemodialisis->Pulso = $request->Pulso;
        $Hemodialisis->Temp = $request->Temp;
        $Hemodialisis->QB = $request->QB;
        $Hemodialisis->PV = $request->PV;
        $Hemodialisis->PA_table = $request->PA_table;
        $Hemodialisis->UFH = $request->UFH;
        $Hemodialisis->Medicamentos = $request->Medicamentos;
        $Hemodialisis->UFTotal = $request->UFTotal;*/
        //fin tabla 1
        
        $Hemodialisis->Observaciones = $request->Observaciones;
        /*$Hemodialisis->Tecnico = $request->Tecnico;
        $Hemodialisis->PA = $request->PA;*/
        $Hemodialisis['T2Fecha'] = json_decode($request->Fecha);
        $Hemodialisis['T2Pre'] = json_encode($request->Pre);
        $Hemodialisis['T2Post'] = json_encode($request->Post);
        $Hemodialisis['T2Urr'] = json_encode($request->Urr);
        $Hemodialisis->save();

        return response()->json([
            'success' => true
        ], 200);
    }
}

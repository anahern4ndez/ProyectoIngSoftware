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
        $Hemodialisis->fecha = $request->fecha;
        $Hemodialisis->NoHemodialisis = $request->NoHemodialisis;
        $Hemodialisis->LugarDeProcedencia = $request->LugarDeProcedencia;
        $Hemodialisis->TipoDeHemodialisis = $request->TipoDeHemodialisis;
        //$Via = $request->Via;
        //$Hemodialisis['Via'] = json_encode($Via);
        $Hemodialisis->Via = $request->Via;
        $Hemodialisis->LineasPediatrica = $request->LineasPediatrica;
        $Hemodialisis->Filtro = $request->Filtro;
        $Hemodialisis->FlujoDeSangre = $request->FlujoDeSangre;
        $Hemodialisis->FlujoDializante = $request->FlujoDializante;
        $Hemodialisis->UF = $request->UF;
        $Hemodialisis->Heparinizacion_de_cebado = $request->Heparinizacion_de_cebado;
        $Hemodialisis->Heparinizacion_TransDialisis = $request->Heparinizacion_TransDialisis;
        $Hemodialisis->TiempoH = $request->TiempoH;
        $Hemodialisis->TiempoM = $request->TiempoM;
        $Hemodialisis->Conductividad_Na = $request->Conductividad_Na;
        $Hemodialisis->Conductividad_K = $request->Conductividad_K;
        $Hemodialisis->Conductividad_HCO3 = $request->Conductividad_HCO3;
        $Hemodialisis->PesoPre = $request->PesoPre;
        $Hemodialisis->PesoPost = $request->PesoPost;
        $Hemodialisis->Talla = $request->Talla;
        $Hemodialisis->PesoDelta = $request->PesoDelta;
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
        $Hemodialisis->Tecnico = $request->Tecnico;
        $Hemodialisis->PA = $request->PA;
        $data_table2 = $request->Tabla2;
        $fechaT2 = $request->fechaT2;
        $Hemodialisis['fechaT2'] = json_decode($fechaT2);
        $Hemodialisis['Pre'] = json_encode($request->Pre);
        $Hemodialisis['Post'] = json_encode($request->Post);
        $Hemodialisis['Urr'] = json_encode($request->Urr);
        $Hemodialisis->save();
    }
}

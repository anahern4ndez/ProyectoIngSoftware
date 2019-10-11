<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Formulario_Mortalidad;
use App\Formulario_Hemodialisis;

class FormulariosController extends Controller
{
    public function storeMortalidad(Request $request)
    {
        $mortalidad = new Formulario_Mortalidad;
        $mortalidad->nombre = $request->nombre;
        $mortalidad->sexo = $request->sexo;
        $mortalidad->edad = $request->edad;
        $mortalidad->no_de_registro = $request->no_de_registro;
        $mortalidad->fecha_de_deceso = $request->fecha_de_deceso;
        $mortalidad->ultima_terapia = $request->ultima_terapia;
        $mortalidad->sitio_deceso = $request->sitio_deceso;
        $mortalidad->causa = $request->causa;
        $mortalidad->save();
        return response()->json([
            'success' => true,
            'message' => 'creado'
        ], 200);
    }
    public function storeHemodialisis(Request $request)
    {
        $hemodialisis = new Formulario_Hemodialisis;
        $hemodialisis->nombre = $request->nombre;
        $hemodialisis->edad = $request->edad;
        $hemodialisis->sexo = $request->sexo;
        $hemodialisis->no_de_registro = $request->no_de_registro;
        $hemodialisis->fecha = $request->fecha;
        $hemodialisis->ultima_terapia = $request->ultima_terapia;
        $hemodialisis->fecha_cateter = $request->fecha_cateter;
        $hemodialisis->femoral = $request->femoral;
        $hemodialisis->subclavio = $request->subclavio;
        $hemodialisis->yugular = $request->yugular;
        $hemodialisis->no_sesiones = $request->no_sesiones;
        $hemodialisis->turno = $request->turno;
        $hemodialisis->fecha_cultivo = $request->fecha_cultivo;
        $hemodialisis->resultado_cultivo = $request->resultado_cultivo;
        $hemodialisis->microorganizmo_aislado = $request->microorganizmo_aislado;
        $hemodialisis->medico_reporta_evento = $request->medico_reporta_evento;
        // prueba
        $hemodialisis->save();
        return response()->json([
            'success' => true,
            'message' => 'creado'
        ], 200);
    }
}

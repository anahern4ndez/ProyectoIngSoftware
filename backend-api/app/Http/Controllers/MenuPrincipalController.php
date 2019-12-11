<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class menuPrincipalController extends Controller
{
    public function menu_get_nombre(Request $request){

        $id = $request->id;

        $user = DB::table('users')->where('id', $id)->first();

        return response()->json([
            'user' => $user,
        ], 200);

    }


    public function menu_get_citas(Request $request)
    {

        $id = $request->id;

        if($id==0)
        {
            $citas = DB::table('citas')->get();

        }
        else
        {
            $citas = DB::table('citas')->where('idUsuario', $id)->get();

        }

        $nombres = [];
        $cuis = [];

        foreach ($citas as $valor) {
            $paciente = DB::table('pacientes')->where('id', $valor->idPaciente)->first();
            array_push($nombres, $paciente->Nombre);
            array_push($cuis, $paciente->CUI);
        }

        return response()->json([
            'citas' => $citas,
            'nombres' => $nombres,
            'cuis' => $cuis,
        ], 200);


    }
}

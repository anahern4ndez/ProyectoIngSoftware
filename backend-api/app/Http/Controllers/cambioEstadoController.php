<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\registroestado;
use App\Paciente;

class cambioEstadoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function save(Request $request)
    {   
        $registroestado = new registroestado;
        $registroestado->idregistroestado = $request->register;
        if($request->cui == ''){
            $cui = Paciente::query()->first();
            //$registroestado->cui = 1412300920;
            $registroestado->cui = $cui->CUI;
        }else{
            $registroestado->cui = $request->cui;            
        }
        $registroestado->fecha = $request->fecha;
        $registroestado->estadoinicial = $request->actual;
        $registroestado->estadofinal = $request->cambio;
        $registroestado->save();
        return $request;

        return response()->json([
            'success' => true,
            'message' => 'guardado'
        ], 200);
    }

}
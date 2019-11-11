<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\historiales;

class formularioController extends Controller
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
       $formularios = new historiales;
       $formularios->NombreDelDoctor = $request->NombreDoctor;
       $formularios->NombreDelPaciente = $request->NombrePaciente;
       $formularios->CUI = $request->cui;
       $formularios->fecha = $request->fecha;
       $formularios->TipoFormulario = $request->TipoFormulario;
       $formularios->Path = $request->Path;
       $formularios->save();
       return $request;

       return response()->json([
           'success' => true,
           'message' => 'guardado'
       ], 200);
   }
}

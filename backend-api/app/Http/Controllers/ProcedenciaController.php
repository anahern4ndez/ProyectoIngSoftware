<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedencia;
use DB;
class ProcedenciaController extends Controller
{
    public function getLocation(Request $request){
        $idLoc = $request->id_Dep;
        $target = DB::table('procedencias')->where('ID', $idLoc)->get();
        return response()->json([
            'locations' => $target
        ], 200);
    }

    public function getAllLocation(){
        $val = Procedencia::all();

        return response()->json([
            'success' => true,
            'locations' => $val
        ], 200);
    }
}

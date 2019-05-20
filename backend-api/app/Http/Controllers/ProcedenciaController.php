<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}

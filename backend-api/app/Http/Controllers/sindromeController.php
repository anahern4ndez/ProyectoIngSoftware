<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sindrome_cie_10;

class sindromeController extends Controller
{
    function getAll(){
        //$val = Paciente::all();
        $val = Sindrome_cie_10::get();

        return response()->json([
            'Sindrome' => $val,
        ], 200);
        
    }
}

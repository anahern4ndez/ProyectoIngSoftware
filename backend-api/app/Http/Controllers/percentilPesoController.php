<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\percentilPeso;

class percentilPesoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    public function getPesos(Request $request)
    {
        $year = $request->year;
        $meses = $request->meses;
        $sexo = $request->sexo;
        $peso = $request->peso;
        
        $percentil = percentilPeso::query()
                    ->where('year', $year)
                    ->where('meses', $meses)
                    ->where('sexo', $sexo)
                    ->where('peso', '>=',$peso)
                    ->first();
        
        if (!$percentil) {
            return response()->json([
                'success' => true,
                'encontrado' => false,
            ]);
        }

        return response()->json([
            'success' => true,
            'percentil' => $percentil,
            'encontrado' => true,
        ]);
    }
}

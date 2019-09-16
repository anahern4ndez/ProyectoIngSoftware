<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\percentilPesoAltura;

class percentilPesoAlturaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    public function getPesoAlturas(Request $request)
    {
        $talla = $request->talla;
        $sexo = $request->sexo;
        $peso = $request->peso;
        
        $percentil = percentilPesoAltura::query()
                    ->where('altura', '>=',$talla)
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

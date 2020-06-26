<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapa;

class MapaController extends Controller
{
    function getMapaMedico(Request $request) {
        $cuir = $request->cui;
        $mapa = Mapa::where([['cui', '=', $cuir]])->get();

        return response()->json([
            'success' => true,
            'data' => $mapa
        ], 200);
    }

    function setMapaMedico(Request $request) {
        $mapa = new Mapa;
        $mapa->cui = $request->cui;

        $mapa->fecha = $request->fecha;
        $mapa->na = $request->na;
        $mapa->k = $request->k;
        $mapa->cl = $request->cl;
        $mapa->hco = $request->hco;
        $mapa->bun = $request->bun;
        $mapa->creatinina = $request->creatinina;
        $mapa->glucosa = $request->glucosa;
        $mapa->albumina = $request->albumina;
        $mapa->colesterol = $request->colesterol;
        $mapa->calcio = $request->calcio;
        $mapa->fosforo = $request->fosforo;
        $mapa->pth = $request->pth;
        $mapa->globulosBlancos = $request->globulosBlancos;
        $mapa->hb = $request->hb;
        $mapa->ht = $request->ht;
        
        $mapa->save();

        return response()->json([
            'success' => true,
            'message' => 'Mapa medico creada'
        ], 200);
    }

    function updateMapaMedico(Request $request){
        $cui = $request->cui;
        $fecha = $request->fecha;

        $toUpdate = Mapa::where([['cui', '=', $cui], ['fecha', '=', $fecha]])->first();

        $toUpdate->na = $request->na;
        $toUpdate->k = $request->k;
        $toUpdate->cl = $request->cl;
        $toUpdate->hco = $request->hco;
        $toUpdate->bun = $request->bun;
        $toUpdate->creatinina = $request->creatinina;
        $toUpdate->glucosa = $request->glucosa;
        $toUpdate->albumina = $request->albumina;
        $toUpdate->colesterol = $request->colesterol;
        $toUpdate->calcio = $request->calcio;
        $toUpdate->fosforo = $request->fosforo;
        $toUpdate->pth = $request->pth;
        $toUpdate->globulosBlancos = $request->globulosBlancos;
        $toUpdate->hb = $request->hb;
        $toUpdate->ht = $request->ht;

        $toUpdate->save();
    }
}

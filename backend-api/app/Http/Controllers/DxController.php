<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\DxAsociado;

class DxController extends Controller
{
    public function getDxs() {
        $dxs = DxAsociado::all();

        foreach ($dxs as $dx){
            if ($dx->entero == -1)
                $dx->entero = '.';
            if ($dx->decimal == -1)
                $dx->decimal = '';
        }
        return response()->json([
            'success' => true,
            'dxs' => $dxs,
            'message'=>'Funciono',
        ]);
    }
    /*
    public function getSomeUser(Request $request)
    {
        $id = $request->idb;
        $usersia = User::query()->where(DB::raw('upper(name)'), 'like', "%" . strtoupper($id) . "%")->orWhere(DB::raw('upper(email)'), 'like', "%" . strtoupper($id) . "%")->orWhere(DB::raw('puesto'), 'like', "%" . $id . "%")->get();
        return response()->json([
            'success' => true,
            'usersia' => $usersia,
            'message'=>'Funciono',
        ], 200);
    }*/
}

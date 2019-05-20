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

    }}

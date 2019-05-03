<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class menuPrincipalController extends Controller
{
    public function doMenu(){
        echo "hola";

        $users = DB::table('users')->get();

        foreach ($users as $user) {
            echo $user->id;
        }


        return response()->json([
            'success' => true,
        ], 200);
    }


    public function menu(Request $request){

        echo "hola";

        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required'
        ]);

    }}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    
    public function doLogin(){
        $users = DB::table('users')->get();

        foreach ($users as $user) {
            echo $user->id;
        }
        
        return response()->json([
            'success' => true,
        ], 200);
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class loginController extends Controller
{

    public function login(Request $request){
        
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required'
        ]);
        
        $user = User::query()->where('email', $request->input('email'))->first();

        if(Hash::check($request->input('password'), $user->password)){ 
            
            // echo $user;
            return response()->json([
                'status' => 'success',
                'id' => $user->id,
                'role' => $user->puesto
            ]);
        } else {
            return response()->json(['status' => 'fail'], 401);
        }
    }

    public function logout(){

        if(Auth::check()){
            $api_token = Auth::user()->api_token;

            User::where('api_token', $api_token)->update(['api_token' => null]);
            return response()->json([
                'status' => 'success',
                'message' => $api_token
            ]);
        }
    }

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

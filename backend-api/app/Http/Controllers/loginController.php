<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class loginController extends Controller
{

    public function login(Request $request){
        
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required'
        ]);
        
        $user = User::query()->where('email', $request->input('email'))->first();

        if(($user->password) === $request->input('password')){ 
            $api_token = str_random(50);

            $user->api_token = $api_token;
            $user->save();

            return response()->json([
                'status' => 'success',
                'api_token' => $api_token,
                'message' => $request->data
            ]);
        } else {
            return response()->json(['status' => 'fail'], 401);
        }
    }

    public function logout(){
        print("hola");

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
        echo "hola";
        $users = DB::table('users')->get();

        foreach ($users as $user) {
            echo $user->id;
        }
        
        
        return response()->json([
            'success' => true,
        ], 200);
    }


}

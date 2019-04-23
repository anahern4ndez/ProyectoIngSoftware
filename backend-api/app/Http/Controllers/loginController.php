<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    protected $redirectTo = '/';

    protected function guard(){
        return Auth::guard('guard-name');
    }

    public function login(Request $request){
        $this.validate($data, [
            'email' => 'email|required',
            'password' => 'required'
        ]);

        $user = User::query()->where('email', $request->input('email'))->first();

        if(Crypt::decrypt($user->password) === $request->input('password')){
            $api_token = str_random(50);

            $user->api_token = $token;

            $user->save();

            return response()->json([
                'status' => 'success',
                'api_token' => $apikey
            ]);
        } else {
            return response()->json(['status' => 'fail'], 401);
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

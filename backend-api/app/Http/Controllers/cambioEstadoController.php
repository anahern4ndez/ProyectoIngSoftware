<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class cambioEstadoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function guardarEstado(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|unique:users,email',
            'password' => 'min:6|max:255'
        ]);
        
        $user = new User;
        //$user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->puesto = $request->puesto;
        $user->save();
        return $request;

        return response()->json([
            'success' => true,
            'message' => 'creado'
        ], 200);
    }

}
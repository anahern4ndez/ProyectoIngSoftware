<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function index() {
        // regresa una respuesta con el objeto especificado como json
        // y el segundo parametro es el codigo HTTP.
        
        return response()->json([
            'success' => true,
            'message' => 'Hola amigos!!',
        ], 200);
    }

    public function getUsers() {
        $users = User::all();
        echo "Probando...";

        return response()->json([
            'success' => true,
            'users' => $users
        ], 200);
    }
}

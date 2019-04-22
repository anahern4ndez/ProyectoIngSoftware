<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function printInfo(){
        echo "Llamando a funcion...";
        
        return response()->json([
            'success' => true,
            'message' => 'Holiwi',
        ], 200);
    }
}

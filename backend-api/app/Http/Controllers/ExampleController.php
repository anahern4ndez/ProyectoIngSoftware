<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
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

    public function postExample(Request $request) {
        // hay varias maneras de acceder a los datos que vienen en el Request.
        // Una de ellas es simplemente como un atributo del objeto, con la sintaxis (->)
        // Es lo mismo que el (.) en otros lenguajes: objeto->nombreAtributo

        return response()->json([
            'success' => true,
            'message' => 'El usuario envio: '.$request->message
        ], 200);
    }
}

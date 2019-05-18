<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        #echo "Probando...";

        return response()->json([
            'success' => true,
            'users' => $users,
            'message'=>'Funciono',
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
    public function destroy(Request $request)
    {
        $id = $request->id;
        $user=User::find($id);
        $user->delete();
        return response()->json([
            'success' => true,
            'message' => 'eliminado'
        ], 200);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'email',
            'password' => 'min:6|max:255'
        ]);
        
        $user = new User;
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash::make($request->password);
        $user->puesto = $request->puesto;
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'creado'
        ], 200);
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'email' => 'email',
            'password' => 'min:6|max:255'
        ]);

        $id = $request->id;
        $user=User::find($id);
        #$user->name = 'diego';
        #$user->email = 'diego@gmail.com';
        #$user->password = '12345';
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->password = $request->password;
        $user->puesto = $request->puesto;
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'creado'
        ], 200);
    }
    public function getOneUser(Request $request)
    {
        $id = $request->idb;
        $usersi = User::find($id);

        return response()->json([
            'success' => true,
            'usersi' => $usersi,
            'message'=>'Funciono',
        ], 200);
    }
    public function getSomeUser(Request $request)
    {
        $id = $request->idb;
        $usersia = User::query()->where('name', 'like', "%" . $id . "%")->orWhere('id', 'like', $id)->get();

        return response()->json([
            'success' => true,
            'usersia' => $usersia,
            'message'=>'Funciono',
        ], 200);
    }
}
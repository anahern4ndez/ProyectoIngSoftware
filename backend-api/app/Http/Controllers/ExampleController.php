<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Spatie\Permission\Models\Permission;

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
        $userP=$request->userP;
        if($userP='RandallLou'){
            $id = $request->id;
            $user=User::find($id);
            $user->delete();}
        return response()->json([
            'success' => true,
            'message' => 'eliminado'
        ], 200);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|unique:users,email',
            'password' => 'min:6|max:255'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash::make($request->password);
        $user->puesto = $request->puesto;
        //$user->imagen = $request->img;
        $this->givePermission($user);
        
        //Comente esto
        //return $request;

        return response()->json([
            'success' => true,
            'message' => 'creado'
        ], 200);
    }

    public function storeWithRole(Request $request){
        $this->validate($request, [
            'email' => 'email|unique:users,email',
            'password' => 'min:6|max:255'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash::make($request->password);
        $user->puesto = $request->puesto;
        $user->imagen = $request->img;
        $user->save();
        
        $user->assignRole(DB::table('roles')->select('name')->get());
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
        $userP=$request->userP;
        if($userP='RandallLou'){
            $id = $request->id;
            $user=User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->password = $request->password;
            $user->puesto = $request->puesto;
            $user->save();}

        return response()->json([
            'success' => true,
            'message' => 'actualizado'
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

    function findById(Request $request){
        (int)$id = $request->ID;
        $user =  User::where('id', $id)->get();

        return response()->json([
            'success' => true,
            'User' => $user[0]->name
        ], 200);
    }

    public function updateDG(Request $request)
    {
        $id = $request->id;
        $paciente=Paciente::find($id);
        $paciente->Telefono = $request->Telefono;
        $paciente->Peso = $request->Peso;
        $paciente->Talla = $request->Talla;
        $paciente->PA = $request->PA;
        $paciente->save();

        return response()->json([
            'success' => true,
            'message' => 'Datos Generales'
        ], 200);
    }
    public function getSomeUser(Request $request)
    {
        $id = $request->idb;
        $usersia = User::query()->where(DB::raw('upper(name)'), 'like', "%" . strtoupper($id) . "%")->orWhere(DB::raw('upper(email)'), 'like', "%" . strtoupper($id) . "%")->orWhere(DB::raw('puesto'), 'like', "%" . $id . "%")->get();
        return response()->json([
            'success' => true,
            'usersia' => $usersia,
            'message'=>'Funciono',
        ], 200);
    }

    public function getMaxId(Request $request)
    {
        $idersia = DB::table('users')->find(\DB::table('users')->max('id'));;
        return response()->json([
            'success' => true,
            'idersia' => $idersia,
            'message'=>'Funciono',
        ], 200);
    }

    
    public function givePermission($user){
        switch($user->puesto) {
            //super admin
            case 1:
                $user->givePermissionTo('ver pacientes');
                $user->givePermissionTo('agendar citas');
                $user->givePermissionTo('crear usuarios');
                $user->givePermissionTo('editar pacientes');
                $user->givePermissionTo('realizar hemodialisis');
                $user->givePermissionTo('tecnico hemodialisis');
                $user->givePermissionTo('dr hemodialisis');
                $user->givePermissionTo('crear pacientes');
                $user->givePermissionTo('editar citas');
                $user->givePermissionTo('borrar citas');    
                $user->givePermissionTo('ver estadisticas');
                $user->givePermissionTo('vista general');
                $user->givePermissionTo('dar consulta');
                break;
            //profesional
            case 2:
                $user->givePermissionTo('realizar hemodialisis');
                $user->givePermissionTo('ver pacientes');
                $user->givePermissionTo('editar pacientes');
                $user->givePermissionTo('crear pacientes');
                $user->givePermissionTo('dar consulta');
                $user->givePermissionTo('agendar citas');
                $user->givePermissionTo('ingresar formularios');
                $user->givePermissionTo('dr hemodialisis');
                break;
            //secretaria
            case 3:
                $user->givePermissionTo('agendar citas');
                $user->givePermissionTo('editar pacientes');
                $user->givePermissionTo('ver pacientes');
                $user->givePermissionTo('crear pacientes');
                $user->givePermissionTo('borrar pacientes');
                $user->givePermissionTo('vista general');
                break;
            //asistente
            case 4:
                $user->givePermissionTo('agendar citas');
                $user->givePermissionTo('editar pacientes');
                $user->givePermissionTo('ver pacientes');
                $user->givePermissionTo('crear pacientes');
                $user->givePermissionTo('borrar pacientes');
                $user->givePermissionTo('realizar hemodialisis');
                $user->givePermissionTo('tecnico hemodialisis');
    
                break;
            //tecnico
            case 5:
                $user->givePermissionTo('realizar hemodialisis');
                $user->givePermissionTo('tecnico hemodialisis');
                break;
            //visitante
            case 6:
                $user->givePermissionTo('agendar citas');
                $user->givePermissionTo('dar consulta');
                $user->givePermissionTo('ingresar formularios');
                $user->givePermissionTo('dr hemodialisis');
                break;
        }

        $user->save();
    }
}
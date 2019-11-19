<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
class UsuariosSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // Creacion de usuario Randall Lou
        $user = new User;
        $user->name = "Randall Lou";
        $user->email = "prueba@dom.com";
        $user->password = Hash::make('password123');
        $user->puesto = 1;
        $user->imagen = null;
        $this->givePermission($user);

        // Creacion de usuario Celeste Espel
        $user = new User;
        $user->name = "Celeste Espel";
        $user->email = "celesteespel@dom.com";
        $user->password = Hash::make('password123');
        $user->puesto = 2;
        $user->imagen = null;
        $this->givePermission($user);
    }   
    
    function givePermission($user){
        switch($user->puesto) {
            //super admin
            case 1:
                $user->givePermissionTo('ver pacientes');
                $user->givePermissionTo('agendar citas');
                $user->givePermissionTo('crear usuarios');
                $user->givePermissionTo('editar pacientes');
                $user->givePermissionTo('realizar hemodialisis');
                $user->givePermissionTo('crear pacientes');
                $user->givePermissionTo('editar citas');
                $user->givePermissionTo('borrar citas');    
                $user->save();
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
    
                break;
            //tecnico
            case 5:
                $user->givePermissionTo('realizar hemodialisis');
                $user->save();
                break;
            //visitante
            case 6:
                $user->givePermissionTo('agendar citas');
                $user->givePermissionTo('ingresar formularios');
                $user->save();
                break;
        }
    }

}
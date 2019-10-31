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
        $user->save();
        $user->givePermissionTo('ver pacientes');
        $user->givePermissionTo('agendar citas');
        $user->givePermissionTo('crear usuarios');
        $user->givePermissionTo('editar pacientes');
        $user->givePermissionTo('realizar hemodialisis');

        // Creacion de usuario Celeste Espel
        $user = new User;
        $user->name = "Celeste Espel";
        $user->email = "celesteespel@dom.com";
        $user->password = Hash::make('password123');
        $user->puesto = 1;
        $user->imagen = null;
        $user->save();
        $user->givePermissionTo('ver pacientes');
    }   
    
}
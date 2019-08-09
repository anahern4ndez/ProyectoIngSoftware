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
        $user = [
            'name' => 'Usuario Prueba',
            'email' => 'prueba@dom.com',
            'password' => Hash::make('password123'),
            'puesto' => 1,
        ];
        User::insert($user);
    }
}
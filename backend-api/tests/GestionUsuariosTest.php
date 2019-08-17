<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use Faker\Factory as Faker;

class GestionUsuariosTest extends TestCase
{
    //use DatabaseTransactions;

    /**
     * 
     */
    public function getUsuarios() {
        
        // GET request de Usuarios
        $this->json('GET', '/users')
            ->seeJson([
                'success' => true,
            ]);
    }
    /**
     * Prueba modificar un usuario con datos default.
     * 
     */
    public function testModificarUsuario() {
        $faker = Faker::create();
        //Se crea un usuario a modificar
        $user = factory('App\User')->create();
        //Pasara
        $this->json('PUT', '/users/update', [
            'id' => $user->id,
            'name' => $faker->name(),
            'email' => $user->email ,
            'password' => $faker->password(),
            'puesto' => $faker->numberBetween($min = 1, $max = 4)
        ])->seeJson([
            'success' => true,
        ]);

    }
    /**
     * Prueba crear una usuario con datos default.
     * 
     */
    public function testCrearUsuario() {
        $faker = Faker::create();
        //$user = factory('App\User')->create();
        //Pasara
        $this->json('POST', '/users/create', [
            'name' => $faker->name(),
            'email' => $faker->email(),
            'password' => $faker->password(),
            'puesto' => $faker->numberBetween($min = 1, $max = 4)
        ])->seeJson([
            'success' => true,
        ]);
        //Esta prueba No Pasara
        /*$this->json('POST', '/users/create', [
            'name' => $faker->name(),
            'email' => 'prueba@dom.com',
            'password' => $faker->password(),
            'puesto' => $faker->numberBetween($min = 1, $max = 4)
        ])->seeJson([
            'success' => true,
        ]);*/
    }
    /**
     * Prueba eliminar un usuario con datos default.
     * 
     */
    public function testEliminarUsuario() {
        $faker = Faker::create();
        //Se crea un usuario a eliminar
        $user = factory('App\User')->create();
        //Pasara
        $this->json('DELETE', '/users/destroy', [
            'id' => $user->id
        ])->seeJson([
            'success' => true,
        ]);

    }
}

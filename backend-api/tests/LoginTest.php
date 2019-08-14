<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use Faker\Factory as Faker;
use App\User;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $user = [
            'email' => 'prueba@dom.com',
            'password' => 'password123',
        ];
        
        $this->json('POST', '/login', [
            'email' => $user['email'],
            'password' => $user['password']
        ])->seeJson([
            'status' => 'success',
        ]);
    }

    /**
     * A basic test example.
     *
     * 
    public function testVerifyLogin()
    {
        $user = [
            'email' => 'prueba',
            'password' => 'password123',
        ];
        
        $this->json('POST', '/login', [
            'email' => $user['email'],
            'password' => $user['password']
        ])->seeJson([
            'email' => 'The email must be a valid email address.'
        ]);
    }*/
}


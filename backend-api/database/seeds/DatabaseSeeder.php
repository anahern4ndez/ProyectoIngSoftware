<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        User::create([
            'id' => 10,
            'name' => 'admin',
            'email' => 'admin@gmail.com', 
            'password' => 'admin12345'
        ]);
    }
}

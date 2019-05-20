<?php

use Illuminate\Database\Seeder;
use App\tipo_sangre;

class TipoDeSangreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sangres = [
            ['ID' => 1, 'significado' => 'O+'],
            ['ID' => 2, 'significado' => 'O-'],
            ['ID' => 3, 'significado' => 'A+'],
            ['ID' => 4, 'significado' => 'A-'],
            ['ID' => 5, 'significado' => 'B+'],
            ['ID' => 6, 'significado' => 'B-'],
            ['ID' => 7, 'significado' => 'AB+'],
            ['ID' => 8, 'significado' => 'AB-']
        ];
        foreach($sangres as $sangre){
            tipo_sangre::insert($sangre);
        }
    }
}

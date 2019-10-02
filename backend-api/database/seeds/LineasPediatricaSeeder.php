<?php

use Illuminate\Database\Seeder;
use App\LineasPediatricas;

class LineasPediatricaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $codigos = [
            ['ID' => 0, 'significado' => '6.5"'],
            ['ID' => 1, 'significado' => '8.0"']
        ];
        foreach($codigos as $cod){
            LineasPediatricas::insert($cod);
        }
    }
}

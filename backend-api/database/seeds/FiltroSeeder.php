<?php

use Illuminate\Database\Seeder;
use App\Filtro;
class FiltroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $codigos = [
            ['ID' => 0, 'significado' => '0.7m2'],
            ['ID' => 1, 'significado' => '0.9m2'],
            ['ID' => 2, 'significado' => '0.11m2'],
            ['ID' => 3, 'significado' => '1.5m2']
        ];
        foreach($codigos as $cod){
            Filtro::insert($cod);
        }
    }
}

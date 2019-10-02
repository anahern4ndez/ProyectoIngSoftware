<?php

use Illuminate\Database\Seeder;
use App\FlujoDializante;
class FlujoDializanteSeeder extends Seeder
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
            ['ID' => 0, 'significado' => '300ml/min'],
            ['ID' => 1, 'significado' => '400ml/min']
        ];
        foreach($codigos as $cod){
            FlujoDializante::insert($cod);
        }
    }
}

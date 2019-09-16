<?php

use Illuminate\Database\Seeder;
use App\CodigoLugarDeProcedenciaHemodialisis;
class CodigoLugarDeProcedenciaHemodialisisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $codigos = [
            ['ID' => 0, 'significado' => 'Hospitalizado'],
            ['ID' => 1, 'significado' => 'Ambulatorio']
        ];
        foreach($codigos as $cod){
            CodigoLugarDeProcedenciaHemodialisis::insert($cod);
        }
    }
    
}

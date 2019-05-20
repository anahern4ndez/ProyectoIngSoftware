<?php

use Illuminate\Database\Seeder;
use App\sexo;
class SexoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sexos = [
            ['ID' => 1, 'significado' => 'Femenino'],
            ['ID' => 2, 'significado' => 'Masculino']
        ];
        foreach($sexos as $sexo){
            sexo::insert($sexo);
        }
    }
}

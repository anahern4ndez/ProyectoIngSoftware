<?php

use Illuminate\Database\Seeder;
use App\tipo_respuesta;
class TipoDeRespuestaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $val = [
            ['ID' => 1, 'significado' => 'si'],
            ['ID' => 2, 'significado' => 'no']
        ];
        foreach($val as $values){
            tipo_respuesta::insert($values);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\codigo_citas;

class CodigoCitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $codigocitas = [
            ['id' => 1, 'significado' => 'Pendiente'],
            ['id' => 2, 'significado' => 'Pasó'],
            ['id' => 3, 'significado' => 'No Pasó'],
            ['id' => 4, 'significado' => 'Se fué'],
            ['id' => 5, 'significado' => 'Cancelada']
        ];

        foreach($codigocitas as $codigo){
            codigo_citas::insert($codigo);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Estado;
class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $val = [
            ['ID' => 1, 'significado' => 'Pre dialisis'],
            ['ID' => 2, 'significado' => 'Dialisis peritoneal'],
            ['ID' => 3, 'significado' => 'Hemodialisis'],
            ['ID' => 4, 'significado' => 'Transplante renal']
        ];
        foreach($val as $values){
            Estado::insert($values);
        }
    }
}

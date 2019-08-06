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
            ['ID' => 1, 'significado' => 'Estable'],
            ['ID' => 2, 'significado' => 'Enfermo']
        ];
        foreach($val as $values){
            Estado::insert($values);
        }
    }
}

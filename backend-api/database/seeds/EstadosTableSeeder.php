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
            ['ID' => 1, 'significado' => 'estable'],
            ['ID' => 2, 'significado' => 'enfermo']
        ];
        foreach($val as $values){
            Estado::insert($values);
        }
    }
}

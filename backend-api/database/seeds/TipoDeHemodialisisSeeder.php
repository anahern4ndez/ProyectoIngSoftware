<?php

use Illuminate\Database\Seeder;
use App\TipoDeHemodialisis;
class TipoDeHemodialisisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $codigos = [
            ['ID' => 0, 'significado' => 'Aguda'],
            ['ID' => 1, 'significado' => 'Cronica']
        ];
        foreach($codigos as $cod){
            TipoDeHemodialisis::insert($cod);
        }
    }
}

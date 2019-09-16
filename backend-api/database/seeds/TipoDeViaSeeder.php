<?php

use Illuminate\Database\Seeder;
use App\TipoDeVia;
class TipoDeViaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $codigos = [
            ['ID' => 0, 'significado' => 'femoral'],
            ['ID' => 1, 'significado' => 'subclavio'],
            ['ID' => 2, 'significado' => 'yugular'],
            ['ID' => 3, 'significado' => 'derecho'],
            ['ID' => 4, 'significado' => 'izquierdo'],
            ['ID' => 5, 'significado' => 'normal']
        ];
        foreach($codigos as $cod){
            TipoDeVia::insert($cod);
        }
    }
}

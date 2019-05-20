<?php

use Illuminate\Database\Seeder;
use App\codigo_vacuna;

class CodigoVacunaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vacunas = [
            ['ID' => 1, 'significado' => 'BCG'],
            ['ID' => 2, 'significado' => 'Poliovirus'],
            ['ID' => 3, 'significado' => 'Hepatitis A'],
            ['ID' => 4, 'significado' => 'Hepatitis B'],
            ['ID' => 5, 'significado' => 'Neumococo'],
            ['ID' => 6, 'significado' => 'Influenza'],
            ['ID' => 7, 'significado' => 'DPT (Difteria/Tétanos/Tosferina )'],
            ['ID' => 8, 'significado' => 'SPR (Sarampión/Paperas/Rubeola)']
        ];
        foreach($vacunas as $vacuna){
            codigo_vacuna::insert($vacuna);
        }
    }
}

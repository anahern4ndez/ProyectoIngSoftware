<?php

use Illuminate\Database\Seeder;
use App\Sindrome_cie_10;

class SCPTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cie10 = [
            ['ID' => 1, 'significado' => 'Síndrome Nefrítico'],
            ['ID' => 2, 'significado' => 'Síndrome Nefrotico'],
            ['ID' => 3, 'significado' => 'Anomalías Urinarias Asintomáticas'],
            ['ID' => 4, 'significado' => 'IRA'],
            ['ID' => 5, 'significado' => 'IRC'],
            ['ID' => 6, 'significado' => 'ITU'],
            ['ID' => 7, 'significado' => 'Uropatía Obstructiva'],
            ['ID' => 8, 'significado' => 'Tubulopatía'],
            ['ID' => 9, 'significado' => 'HTA'],
            ['ID' => 10, 'significado' => 'Nefrolitiasis']
        ];
        foreach($cie10 as $sx){
            Sindrome_cie_10::insert($sx);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Procedencia;
class procedenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$json = File::get("database/seeds/procedencias.json");
        $path = storage_path() . "/json_db/procedencias.json";

        $data_fetch = json_decode(file_get_contents($path),true);
        foreach ($data_fetch as $elem ){
            Procedencia::create($elem);
            
        }

        
    }
}

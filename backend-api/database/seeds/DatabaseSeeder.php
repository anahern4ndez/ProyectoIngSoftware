<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call([
            procedenciasTableSeeder::class,
            SexoTableSeeder::class,
            TipoDeSangreTableSeeder::class,
            SCPTableSeeder::class,
            CodigoVacunaTableSeeder::class,
            TipoDeRespuestaTableSeeder::class,
            EstadosTableSeeder::class,
            UsuariosSeeder::class,
            PacienteSeeder::class,
        ]);
        
    }
}

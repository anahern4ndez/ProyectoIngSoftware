<?php

use Illuminate\Database\Seeder;

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
            PacienteSeeder::class,
            tipoCitasSeeder::class,
            DxAsociadoSeeder::class,
            percentilPesoSeeder::class,
            percentilTallaSeeder::class,
            percentilPesoAlturaSeeder::class,
            PermissionSeeder::class,
            CodigoCitasSeeder::class,
            UsuariosSeeder::class,
        ]);
        
    }
}

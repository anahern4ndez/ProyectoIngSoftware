<?php

use Illuminate\Database\Seeder;
use App\Models\Paciente;
use Faker\Factory as Faker;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();
        
        $paciente = [
            'CUI' => $faker->randomNumber(7),
            'Nombre' => $faker->firstName(),
            'Apellido' => $faker->lastName(),
            'Fecha_de_nacimiento' => $faker->date(),
            'Procedencia' => 101,
            'Nombre_de_padre' => $faker->name('male'),
            'Nombre_de_madre' => $faker->name('female'),
            'Telefono' => $faker->randomNumber(7),
            'Edad' => 20.0,
            'Sindrome_Clinico_Presentacion' => 1,
            'Dx_Definitivo' => 'Dx Definitivo',
            'Dx_Asociados' => 'Dx Asociados',
            'Imagen' => '',
            'Tipo_de_Sangre' => 1,
            'Estudia' => 1,
            'Transfusiones' => 1,
            'EstadoActual' => 1,
            'Sexo' => 1,
            'Kg_perc' => 1.0,
            'Peso' => 1.0,
            'Percentil' => 1,
            'Talla' => 1.0,
            'Cms_perc' => 1.0,
            'PA' => 1.0,
            'Historia' => 'Historia',
        ];

        Paciente::insert($paciente);
    }
}

<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use Laravel\Lumen\Testing\WithoutMiddleware;
use Faker\Factory as Faker;
use App\Models\Paciente;
/**
 *  Clase para pruebas unitarias relativos al controlador de Pacientes. 
 */

class PacienteControllerTest extends TestCase {
    // Trait para revertir los cambios hechos en la DB en cada test.
    use DatabaseTransactions;

    public function testCrearPaciente(){
        $faker = Faker::create();
        //crear un nuevo paciente
        $pacienteDummy = factory('App\Models\Paciente')->create();
        $this->json('POST', '/PacienteController/insert', [
            'Numero_expediente' => $faker->randomNumber(5),
            'CUI' => $faker->randomNumber(7),
            'Nombre' => $faker->firstName(),
            'Apellido' => $faker->lastName(),
            'Fecha_de_nacimiento' => $faker->date(),
            'Procedencia' => 101,
            'Residencia' => 101,
            'Nombre_de_padre' => $faker->name('male'),
            'Nombre_de_madre' => $faker->name('female'),
            'Telefono' => $faker->randomNumber(7),
            'Edad' => 20.0,
            'Sindrome_Clinico_Presentacion' => 1,
            'Dx_Definitivo' => 'Dx Definitivo',
            'Dx_Asociados' => 'Dx Asociados',
            'Imagen' => 'imagen',
            'Tipo_de_Sangre' => 1,
            'Estudia' => 1,
            'Transfusiones' => 1,
            'EstadoActual' => 1,
            'Sexo' => 1,
            'Historia' => 'Historia',
        ])->seeJson([
            'success' => true,
        ]);
        $pacienteEnDB = Paciente::findOne($pacienteDummy->CUI);
        $this->assertEquals($pacienteEnDB, $pacienteDummy);
    }
}
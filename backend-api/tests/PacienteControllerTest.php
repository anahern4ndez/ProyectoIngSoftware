<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use Laravel\Lumen\Testing\WithoutMiddleware;
use Faker\Factory as Faker;
use App\Paciente;
/**
 *  Clase para pruebas unitarias relativos al controlador de Pacientes. 
 */
//dd($this->response->getContent());
class PacienteControllerTest extends TestCase {
    // Trait para revertir los cambios hechos en la DB en cada test.
    use DatabaseTransactions;

    public function testCrearPaciente(){
        $faker = Faker::create();
        $this->json('POST', '/PacienteController/insert', [
            'Numero_expediente' => $faker->randomNumber(8),
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
    }
    public function testFindOne(){
        //crear paciente a encontrar
        $pacienteDummy = factory('App\Paciente')->create();
        $this->json('GET', '/PacienteController/findOne?CUI='.$pacienteDummy->CUI)
            ->seeJson([
                'success' => true,
            ]);
    }
    /*public function testFindById(){
        //crear paciente a encontrar
        $pacienteDummy = factory('App\Paciente')->create();
        $this->json('GET', '/PacienteController/findById?id='.$pacienteDummy->id);
        dd($this->response->getContent());
    }*/

    public function testFindAll(){
        $this->json('GET', '/PacienteController/findAll')
            ->seeJson([
                'success' => true
            ]);
    }
    public function testUpdateAll(){
        $faker = Faker::create();
        //crear paciente a updatear
        $pacienteDummy = factory('App\Paciente')->create();
        //hacerle un update, modificando todos los campos (excepto id)
        $this->json('PUT', '/PacienteController/updateAll',[
            'id' => $pacienteDummy->id,
            'Numero_expediente' => $faker->randomNumber(8),
            'CUI' => $faker->randomNumber(5),
            'Nombre' => $faker->firstName(),
            'Apellido' => $faker->lastName(),
            'Fecha_de_nacimiento' => $faker->date(),
            'Procedencia' => 101,
            'Residencia' => 101,
            'Nombre_de_padre' => $faker->name('male'),
            'Nombre_de_madre' => $faker->name('female'),
            'Telefono' => $faker->randomNumber(7),
            'Edad' => 10.0,
            'Sindrome_Clinico_Presentacion' => 1,
            'Dx_Definitivo' => 'Dx Definitivo modificado',
            'Dx_Asociados' => 'Dx Asociado modificado',
            'Imagen' => 'imagen modificadas',
            'Tipo_de_Sangre' => 2,
            'Estudia' => 2,
            'Transfusiones' => 2,
            'EstadoActual' => 2,
            'Sexo' => 2,
            'Historia' => 'Historia modificada',
        ])
            ->seeJson([
                'success' => true,
            ]);
    }
    public function testEliminarPaciente(){

        //crear paciente a eliminar
        $pacienteDummy = factory('App\Paciente')->create();
        $patientCUI = $pacienteDummy->CUI;
        $this->json('DELETE', '/PacienteController/delete?cui='.$patientCUI)    
            ->seeJson([
                'success' => true,
            ]);
        //verificar que no exista
        $deletedPatient = Paciente::find($pacienteDummy->CUI);
        $this->assertNull($deletedPatient);
    }
}
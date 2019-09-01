<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use Laravel\Lumen\Testing\WithoutMiddleware;
use Faker\Factory as Faker;
use App\Consulta;
use App\Comentario;


class DarConsultaTest extends TestCase
{
    // Trait para revertir los cambios hechos en la DB en cada test.
    use DatabaseTransactions;

    public function testGuardarDatosConsulta(){

        $faker = Faker::create();

        // $consultaDummy = factory('App\Consulta')->create();

        $this->json('POST', '/ConsultaController/insert', [
            'cui' => '13606190601',
            'fecha' => $faker->date(),
            'peso' => $faker->randomNumber(2),
            'talla' => $faker->randomNumber(3),
            'pa' => $faker->randomNumber(3),
            'sindrome_clinico' => 1,
            'Dx_Definitivo' => 'Dx_Definitivo',
            'Dx_Asociados' => 'Dx_Asociados',
            'historia' => 'historia',
            'medicamento' => 'medicamento',
            'resultados_laboratorio' => 'resultados',
            'examen_fisico' => 'examen',
            'evaluacion_medica' => 'evaluacion medica',
            'plan_medico' => 'plan medico',
            'evaluacion_psicologica' => 'evaluacion psicologica',
            'plan_psicologico' => 'plan',
            'evaluacion_trabajo_social' => 'trabajo social',
            'plan_trabajo_social' => 'plan trabajo social',
            'evaluacion_nutricional' => 'evaluacion nutricional',
            'plan_nutricional' => 'plan',
            'evaluacion_farmacologica' => 'evaluacion',
            'plan_farmacologico' => 'plan'
        ])->seeJson([
            'success' => true,
        ]);
    }

    public function testGuardarComentario()
    {
        $faker = Faker::create();

        $this->json('POST', '/ComentarioController/insert', [
            'cui' => '13606190601',
            'comentarios' => 'Este es un comentario',
        ])->seeJson([
            'success' => true,
        ]);
    }

    public function testObtenerComentarios()
    {
        $this->json('GET', '/ComentarioController/findAll')
            ->seeJson([
                'success' => true
            ]);
    }
}

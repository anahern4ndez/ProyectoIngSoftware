<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use Faker\Factory as Faker;
use App\Models\Cita;
use Carbon\Carbon;

class CitasControllerTest extends TestCase {
    // Trait para revertir los cambios hechos en la DB en cada test.
    use DatabaseTransactions;

    /**
     * 
     */
    public function getCitas() {
        // Crear 2 citas con datos arbitrarios.
        $citas = factory('App\Models\Cita', 2)->create();
        
        // GET request
        $this->json('GET', '/citas')
            ->seeJson([
                'success' => true,
                'data' => $citas
            ]);
    }
    
    /**
     * Prueba crear una cita con datos default y revisa que la cita
     * quede persistida en la DB.
     */
    public function testCrearCitaValida() {
        // instancia de Faker para simular datos
        $faker = Faker::create();
        
        // crear estado fake
        factory('App\codigo_citas')->create();
        
        // crear usuario fake
        $user = factory('App\User')->create();
        
        // crear paciente fake
        $paciente = factory('App\Paciente')->create();
        
        // http post request a ruta de creacion de citas con data
        $this->json('POST', '/citas', [
            'idUsuario' => $user->id,
            'idPaciente' => $paciente->id,
            'fecha' => Carbon::now()->addSeconds(5),
            'hora' => '07:00:00',
            'duracionCita' => $faker->randomNumber(2),
            'estado' => 1,
            'tipoCitaID' => 1
        ])->seeJson([
            'success' => true,
        ]);
    }

    public function testCrearCitaConFechaEnElPasado() {
        // instancia de Faker para simular datos
        $faker = Faker::create();
        
        // crear estado fake
        factory('App\codigo_citas')->create();
        
        // crear usuario fake
        $user = factory('App\User')->create();
        
        // crear paciente fake
        $paciente = factory('App\Paciente')->create();
        
        // http post request a ruta de creacion de citas con data
        $this->json('POST', '/citas', [
            'idUsuario' => $user->id,
            'idPaciente' => $paciente->id,
            'fecha' => Carbon::now()->subDays(1),
            'hora' => $faker->time(),
            'duracionCita' => $faker->randomNumber(2),
            'estado' => 1,
            'tipoCitaID' => 1
        ])->seeJson([
            'success' => false,
        ]);
    }

    public function testCrearCitaConHoraInvalida() {
        // instancia de Faker para simular datos
        $faker = Faker::create();
        
        // crear estado fake
        factory('App\codigo_citas')->create();
        
        // crear usuario fake
        $user = factory('App\User')->create();
        
        // crear paciente fake
        $paciente = factory('App\Paciente')->create();
        
        // http post request a ruta de creacion de citas con data
        $this->json('POST', '/citas', [
            'idUsuario' => $user->id,
            'idPaciente' => $paciente->id,
            'fecha' => Carbon::now()->addSeconds(5),
            'hora' => '01:00:00',
            'duracionCita' => $faker->randomNumber(2),
            'estado' => 1,
            'tipoCitaID' => 1
        ])->seeJson([
            'success' => false,
        ]);
    }

    public function testUpdateCita() {
        // instancia de Faker para simular datos
        $faker = Faker::create();

        // crear usuario fake
        $user = factory('App\User')->create();

        // crear paciente fake
        $paciente = factory('App\Paciente')->create();

        factory('App\codigo_citas')->create();
        
        // Crear recurso de cita y guardarlo en DB
        $cita = factory('App\Models\Cita')->create();

        // http PUT request para actualizar datos de la cita creada
        $this->json('PUT', '/citas/'.$cita->id, [
            'idPaciente' => $paciente->id,
            'idUsuario' => $user->id,
            'fecha' => Carbon::now()->addSeconds(5),
            'hora' => '07:00:00',
            'duracionCita' => $faker->randomNumber(2),
            'estado' => 1,
            'tipoCitaID' => 1
        ])->seeJson([
            'success' => true,
        ]);

        // revisar valores actualizados en DB
        $cita = Cita::find($cita->id);
        $this->assertTrue($cita->idPaciente == $paciente->id);
        $this->assertTrue($cita->idUsuario == $user->id);
    }

    public function testBorrarCita() {
        factory('App\codigo_citas')->create();
        // Crear recurso de cita y guardarlo en DB
        $cita = factory('App\Models\Cita')->create();

        // http request para borrar cita
        $this->json('DELETE', '/citas/'.$cita->id)
            ->seeJson([
                'success' => true
            ]);
        
        // verificar que cita no exista.
        $cita = Cita::find($cita->id);
        $this->assertNull($cita);
    }
}
<?php

use Illuminate\Support\Facades\Hash;
use App\codigo_citas;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => Hash::make('password123'),
        'puesto' => 1,
    ];
});

$factory->define(App\Models\Paciente::class, function (Faker\Generator $faker) {
    return [
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
    ];
});

$factory->define(App\Models\Cita::class, function (Faker\Generator $faker) {
    $estado = codigo_citas::all()->count();
    return [
        'idUsuario' => 1,
        'idPaciente' => 1,
        'fecha' => $faker->date(),
        'hora' => $faker->time(),
        'duracionCita' => $faker->randomNumber(2),
        'estado' => $estado,
        'tipoCitaID' => 1,
    ];
});

$factory->define(App\codigo_citas::class, function (Faker\Generator $faker) {
    $count = codigo_citas::all()->count();
    return [
        'id' => $count + 1,
        'significado' => 'hola'
    ];
});
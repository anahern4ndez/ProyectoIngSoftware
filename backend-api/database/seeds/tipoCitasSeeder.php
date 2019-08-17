<?php

use Illuminate\Database\Seeder;
use App\tipoCitas;
class tipoCitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipoCitas = [
            ['tipoCita' => 'Hemodialisis'],
            ['tipoCita' => 'Nutricion']
        ];
        foreach ($tipoCitas as $cita ) {
            tipoCitas::insert($cita);
        }
    }
}

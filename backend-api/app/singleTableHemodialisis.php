<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class singleTableHemodialisis extends Model
{
    protected $fillable = [
        'id',
        'idPaciente',
        'P_A',
        'Pulso',
        'Temp',
        'QB',
        'PV',
        'PA',
        'UFH',
        'Medicamentos'
    ];
    public function idPaciente(){
        return $this->hasOne('App\Paciente', 'id', 'idPaciente');
    }
}

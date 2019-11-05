<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model {
    public $timestamps = false;
    protected $fillable = [
        'idUsuario',
        'idPaciente',
        'fecha',
        'hora',
        'estado',
        'duracionCita',
        'tipoCitaID'

    ];

    public function tipodeCita(){
        return $this->hasOne('App\tipo_citas', 'id', 'tipoCitaID');
    }
    public function idPaciente(){
        return $this->hasOne('App\Paciente', 'id', 'idPaciente');
    }
}

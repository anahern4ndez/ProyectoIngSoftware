<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacuna extends Model
{
    //
    protected $param=[
        'idPaciente',
        'BCG',
        'Poliovirus',
        'Hepatitis A',
        'Hepatitis B',
        'Neumococo',
        'Influenza',
        'DPT',
        'SPR'
    ];

    public function idPaciente(){
        return $this->hasMany('App\Paciente','CUI', 'idPaciente'); 
    }
}

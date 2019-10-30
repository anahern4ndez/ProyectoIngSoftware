<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacuna extends Model
{
    //
    public $timestamps = false;
    protected $fillable=[
        'fecha',
        'idPaciente',
        'BCG',
        'Poliovirus',
        'HepatitisA',
        'HepatitisB',
        'Neumococo',
        'Influenza',
        'DPT',
        'SPR'
    ];

    public function idPaciente(){
        return $this->hasMany('App\Paciente','idPaciente', 'CUI'); 
    }
}

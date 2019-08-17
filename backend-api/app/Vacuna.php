<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacuna extends Model
{
    //
    public $timestamps = false;
    protected $fillable=[
        'id',
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
        return $this->hasMany('App\Models\Paciente','idPaciente', 'CUI'); 
    }
}

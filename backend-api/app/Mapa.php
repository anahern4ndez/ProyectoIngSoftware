<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapa extends Model
{
    protected $fillable = [
        'id',
        'cui',
        'fecha',
        'na',
        'k',
        'cl',
        'hco',
        'bun',
        'creatinina',
        'glucosa',
        'albumina',
        'colesterol',
        'calcio',
        'fosforo',
        'pth',
        'globulosBlancos',
        'hb',
        'ht'
    ];
    public $timestamps = false;

    /**
     * Relaciones de la tabla Paciente
     */
    public function cui(){
        return $this->hasMany('App\Paciente','CUI','cui'); 
    }
}

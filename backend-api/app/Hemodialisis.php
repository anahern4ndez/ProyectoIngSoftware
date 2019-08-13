<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hemodialisis extends Model
{
    protected $fillable = [ 
        'IdPaciente',
        'Estado',
        'HoraEstimada',
        'HoraServicio',
        'IdDoctor'
    ];
    public $timestamps = false;

    /**
     * Relaciones de la tabla de hemodialisis
     */
}

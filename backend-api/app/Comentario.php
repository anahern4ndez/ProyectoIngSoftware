<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [ 
        'cui',
        'comentarios'
    ];

    /**
     * Relaciones de la tabla Paciente
     */
    public function cui(){
        return $this->hasMany('App\Paciente','CUI','cui'); 
    }
}

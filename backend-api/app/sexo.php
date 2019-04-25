<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sexo extends Model
{
    protected $params=['ID', 'significado'];
    protected $table="sexo";

    public function genPaciente(){
        return $this->belongsTo('App\Paciente', "CUI");
    }
}

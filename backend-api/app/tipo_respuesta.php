<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_respuesta extends Model
{
    protected $fillable=['ID', 'significado'];
    protected $primaryKey = 'ID';
    public $timestamps = false;

    public function respuesta_Estudio(){
        return $this->belongsTo('App\Paciente', "ID", "Estudia");
    }
    public function respuesta_Trans(){
        return $this->belongsTo('App\Paciente', "ID", "Transfusiones");
    }
}

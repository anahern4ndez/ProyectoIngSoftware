<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sexo extends Model
{
    protected $fillable=['ID', 'significado'];
    protected $table="sexo";
    protected $primaryKey  = 'ID';
    public $timestamps = false;
    
    public function genPaciente(){
        return $this->belongsTo('App\Paciente', "ID", "Sexo");
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedencia extends Model
{
    protected $params=['id', 'significado'];
    
    public function procede(){
        return $this->belongsTo('App\Paciente');
    }
}

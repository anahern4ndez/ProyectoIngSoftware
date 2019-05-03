<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedencia extends Model
{
    public $primaryKey = 'ID';
    protected $fillable=['ID', 'significado'];
    protected $timestamps=false;
    public function procede(){
        return $this->belongsTo('App\Paciente', 'ID', 'Procedencia');
    }
}

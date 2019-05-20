<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedencia extends Model
{
    public $primaryKey = 'ID';
    //protected $table="Procedencia";
    protected $fillable=['ID', 'significado'];
    public $timestamps=false;
    public function procede(){
        return $this->belongsTo('App\Paciente', 'ID', 'Procedencia');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_sangre extends Model
{
    protected $fillable=['ID', 'significado'];
    protected $table="tipo_sangre";
    protected $primary = 'ID';
    public $timestamps = false;

    public function Sindrome_Clinico_Presentacion(){
        return $this->hasOne('App\Models\Paciente','ID','Tipo_de_Sangre'); 
    }
}

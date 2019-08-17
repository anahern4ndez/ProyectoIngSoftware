<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sindrome_cie_10 extends Model
{
    protected $fillable=['ID', 'significado'];
    protected $table="sindrome_cie-10";
    protected $primaryKey = 'ID';
    public $timestamps = false;

    public function presentacionPaciente(){
        return $this->belongsTo('App\Models\Paciente','ID','Sindrome_Clinico_Presentacion'); 
    }
}

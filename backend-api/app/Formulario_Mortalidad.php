<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario_Mortalidad extends Model
{
    protected $table ='formulario_mortalidad';
    protected $primaryKey = 'nombre';
    protected $fillable = [
        'nombre','sexo','edad','no_de_registro','fecha_de_deceso','ultima_terapia','sitio_deceso','causa'
    ];
    public $timestamps =false;
    public $id=false;
}

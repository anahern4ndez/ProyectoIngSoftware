<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario_Hemodialisis extends Model
{
    protected $table ='formulario_hemodialisis';
    protected $primaryKey = 'nombre';
    protected $fillable = [
        'nombre','edad','sexo','no_de_registro','fecha','ultima_terapia','fecha_cateter','femoral','subclavio','yugular','no_sesiones','turno','fecha_cultivo','resultado_cultivo','microorganizmo_aislado','medico_reporta_evento'
    ];
    public $timestamps =false;
    public $id=false;

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = [ 
        'id',
        'cui',
        'fecha',
        'peso',
        'talla',
        'pa',
        'historia',
        'sindrome_clinico',
        'Dx_Definitivo',
        'Dx_Asociados',
        'medicamento',
        'resultados_laboratorio',
        'examen_fisico',
        'evaluacion_medica', 
        'plan_medico',
        'evaluacion_psicologica',
        'plan_psicologico',
        'evaluacion_trabajo_social',
        'plan_trabajo_social',
        'evaluacion_nutricional', 
        'plan_nutricional',
        'evaluacion_farmacologica', 
        'plan_farmacologico'
        // 'id_imagenes_lab'
    ];
    public $timestamps = false;

    /**
     * Relaciones de la tabla Paciente
     */
    public function cui(){
        return $this->hasMany('App\Paciente','CUI','cui'); 
    }
}

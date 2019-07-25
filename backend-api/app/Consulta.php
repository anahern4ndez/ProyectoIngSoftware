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
        'psicosocial',
        'nutricion',
        'plan_medico',
        'plan_psicosocial',
        'plan_nutricional',
        'plan_farmacologico',
        'id_imagenes_lab',
        'laboratorio',
        'resultados_laboratorio',
        'medicamento',
        'proxima_visita'
    ];

    /**
     * Relaciones de la tabla Paciente
     */
    public function cui(){
        return $this->hasMany('App\Paciente','CUI','cui'); 
    }
}

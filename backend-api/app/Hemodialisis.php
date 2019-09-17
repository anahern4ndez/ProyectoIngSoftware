<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hemodialisis extends Model
{
    protected $fillable = [ 
        'IdPaciente',
        'Fecha',
        'NoHemodialisis',
        'LugarDeProcedencia',
        'TipoDeHemodialisis',
        'Via',
        'LineasPediatrica',
        'Filtro',
        'FlujoDializante',
        'FlujoDeSangre',
        'UF',
        'Heparinizacion_cebado',
        'Heparinizacion_TransDialisis',
        'TiempoH',
        'TiempoM',
        'Conductividad_Na',
        'Conductividad_K',
        'Conductividad_HCO3',
        'PesoPre',
        'PesoPost',
        'Talla',
        'PesoDelta',
        'Especiales',
        'Tabla1',
        'Observacion',
        'Tecnico',
        'PA',
        'Tabla2'
    ];
    public $timestamps = false;
    protected $casts =[
        'Via' => 'array',
        'Tabla1' => 'array',
        'Tabla2' => 'array'
    ];

    /**
     * Relaciones de la tabla de hemodialisis
     */
}

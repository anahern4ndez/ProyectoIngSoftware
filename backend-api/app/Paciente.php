<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $params = ['id', 
        'Nombre', 
        'Apellido', 
        'Fecha_de_nacimiento',
        'Procedencia',
        'Nombre_de_padre',
        'Nombre_de_madre',
        'Telefono',
        'Edad',
        'Sindrome_Clinico_Presentacion',
        'Dx_Definitivo',
        'Dx_Asociados',
        'CUI',
        'Imagen',
        'Tipo_de_Sangre',
        'Estudia',
        'Transfusiones',
        'EstadoActual',
        'Sexo'
    ];
    /**
     * Relaciones de la tabla Paciente
     */
    public function Sindrome_Clinico_Presentacion(){
        return $this->hasOne('App\Sindrome_cie_10','ID'); 
    }
    public function tipo_de_sangre(){
        return $this->hasOne('App\tipo_sangre','ID');
    }
    public function Procedencia(){
        return $this->hasOne('App\Procedencia','ID', 'CUI');
    }
    public function EstadoActual(){
        return $this->hasOne('App\Estado','ID', 'CUI');
    }
    public function tipo_respuesta(){
        return $this->hasMany('App\tipo_respuesta','ID', 'CUI');
    }

    public function Sexo(){
        return $this->hasOne('App\sexo','ID', 'CUI');
    }


}

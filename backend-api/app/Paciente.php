<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $primaryKey = 'CUI';
    protected $fillable = [ 
        'id',
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
        return $this->hasOne('App\Sindrome_cie_10','ID','Sindrome_Clinico_Presentacion'); 
    }
    public function tipo_de_sangre(){
        return $this->hasOne('App\tipo_sangre','ID','Tipo_de_Sangre');
    }
    public function Procedencia(){
        return $this->hasOne('App\Procedencia','ID', 'Procedencia');
    }
    public function EstadoActual(){
        return $this->hasOne('App\Estado','ID', 'EstadoActual');
    }
    public function tipo_respuesta_estudia(){
        return $this->hasOne('App\tipo_respuesta','ID', 'Estudia');
    }
    public function tipo_respuesta_trans(){
        return $this->hasOne('App\tipo_respuesta','ID', 'Transfusiones');
    }

    public function Sexo(){
        return $this->hasOne('App\sexo','ID', 'Sexo');
    }


}

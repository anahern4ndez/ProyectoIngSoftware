<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
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
        'Sexo',
        'Kg_perc',
        'Peso',
        'Percentil',
        'Talla',
        'PA',
        'Cms_perc',
        'Historia',
        'Numero_Orden'
    ];
    /**
     * Relaciones de la tabla Paciente
     */
    public function Sindrome_Clinico_Presentacion(){
        return $this->hasOne('App\Sindrome_cie_10','ID','Sindrome_Clinico_Presentacion'); 
    }
    public function Tipo_de_Sangre(){
        return $this->hasOne('App\tipo_sangre','ID','Tipo_de_Sangre');
    }
    public function Procedencia(){
        return $this->hasOne('App\Procedencia','ID', 'Procedencia');
    }
    public function EstadoActual(){
        return $this->hasOne('App\Estado','ID', 'EstadoActual');
    }
    public function Estudia(){
        return $this->hasOne('App\tipo_respuesta','ID', 'Estudia');
    }
    public function Transfusiones(){
        return $this->hasOne('App\tipo_respuesta','ID', 'Transfusiones');
    }

    public function sexo_rel(){
        return $this->hasOne('App\sexo','ID', 'Sexo');
    }


}

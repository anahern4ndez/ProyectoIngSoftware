<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //aqui cargamos un array con los parametros (columnas) de la tabla sql.
    protected $fillable = ['ID', 'significado'];
    protected $primaryKey  = 'ID';
    public $timestamps = false;
}

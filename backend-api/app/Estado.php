<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //aqui cargamos un array con los parametros (columnas) de la tabla sql.
    protected $params = ['ID', 'significado'];
}

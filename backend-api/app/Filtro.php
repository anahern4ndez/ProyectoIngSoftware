<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filtro extends Model
{
    //
    protected $fillable = ['ID', 'significado'];
    protected $primaryKey  = 'ID';
    public $timestamps = false;
}

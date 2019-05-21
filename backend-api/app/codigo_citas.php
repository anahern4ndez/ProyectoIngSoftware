<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class codigo_citas extends Model
{
    protected $fillable=['id', 'significado'];
    protected $table="codigocitas";
    protected $primaryKey  = 'id';
    public $timestamps = false;

}

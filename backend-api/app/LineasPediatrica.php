<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineasPediatrica extends Model
{
    //
    protected $fillable = ['ID', 'significado'];
    protected $primaryKey  = 'ID';
    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registroestado extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idregistroestado', 'cui', 'fecha', 'estadoinicial', 'estadofinal'
    ];
    public $timestamps =false;
    protected $primaryKey  = 'idregistroestado';
}

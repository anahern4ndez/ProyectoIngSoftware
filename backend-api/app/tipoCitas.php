<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoCitas extends Model
{
    protected $fillable=[
        'id',
        'tipoCita'
    ];

    public $timestamps = false;

    public function tipoCitaRelation(){
        return $this->belongsTo('App\Models\Cita', 'id', 'tipoCitaID');
    }
}

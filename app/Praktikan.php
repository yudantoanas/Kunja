<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Praktikan extends Model
{
    protected $fillable = [
	    'nama',
	    'nim',
	    'kelas',
	    'shift',
        'ta_score',
        'modul_id',
        'praktikum_id'
    ];

    public function modul(){
        return $this->belongsTo('App\Modul');
    }

    public function praktikum(){
        return $this->belongsTo('App\Praktikum');
    }
}

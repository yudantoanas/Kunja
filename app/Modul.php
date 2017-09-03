<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    protected $fillable = [
    	'id_praktikum',
    	'no_modul',
    	'judul_modul', 
    	'penyusun_modul', 
    	'modul_file',
    	'tesawal_file',
	];

    public function praktikum() {
        return $this->belongsTo('App\Praktikum', 'id_praktikum', 'id');
    }
}

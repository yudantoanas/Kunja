<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    protected $fillable = [
    	'praktikum_id',
    	'no_modul',
    	'judul_modul', 
    	'penyusun_modul', 
    	'modul_image', 
    	'modul_file',
    	'tesawal_file'
	];

    public function praktikum() {
        return $this->belongsTo('App\Praktikum');
    }

    public function praktikan(){
        return $this->hasMany('App\Praktikan');
    }
}

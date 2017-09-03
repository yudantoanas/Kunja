<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Praktikum extends Model
{
    protected $fillable = [
    	'nama_praktikum', 
    	'jumlah_modul', 
	];

	public function modul() {
		return $this->hasOne('App\Modul');
	}

	public function praktikan(){
	    return $this->hasMany('App\Praktikan');
    }
}

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
    ];
}

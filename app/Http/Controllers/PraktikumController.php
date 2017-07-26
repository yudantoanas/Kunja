<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Praktikum;
use App\Modul;

class PraktikumController extends Controller
{
    // showing list of praktikum
    public function index() {
        // get all praktikum data
        $datas = Praktikum::all();

        // create new Modul object
        $modul = new Modul();

        return view('pages.list-praktikum', compact('datas', 'modul'));
        // dd($datas->judul_modul);
    }

    // showing add praktikum form
    public function addPraktikum() {
    	return view('pages.admin.add-praktikum');
    }

    // storing praktikum data
    public function store(Request $req) {
    	Praktikum::create([
    		'nama_praktikum' => $req->nama_praktikum,
    		'jumlah_modul' => $req->jumlah_modul,
		]);

    	return redirect('list-praktikum');
    }
}

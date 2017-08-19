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

        return view('pages.list-praktikum', compact('datas'));
        // dd($datas->judul_modul);
    }

    // showing add praktikum form
    public function addPraktikum() {
    	return view('pages.admin.add-praktikum');
    }

    public function editPraktikum($id) {
        $praktikum = Praktikum::find($id);

        return view('pages.admin.edit-praktikum', compact('praktikum'));
    }

    // storing praktikum data
    public function store(Request $req) {
    	Praktikum::create([
    		'nama_praktikum' => $req->nama_praktikum,
    		'jumlah_modul' => $req->jumlah_modul,
		]);

    	return redirect('list-praktikum');
    }

    public function update(Request $req) {
        $praktikum = Praktikum::find($req->id);
        $praktikum->nama_praktikum = $req->nama_praktikum;
        $praktikum->jumlah_modul = $req->jumlah_modul;
        $praktikum->save();

        return redirect('list-praktikum');
    }
}

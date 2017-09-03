<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use Smalot\PdfParser\Parser;

use App\Modul;
use App\Praktikum;
use App\Praktikan;

use Storage;
use DB;

class ModulController extends Controller
{
    // showing list of modul
    public function index($idPraktikum) {
        // retrieve all Modul's data
    	$modules = new Modul();
        $id_praktikum = $idPraktikum;
        $nama_praktikum = Praktikum::where('id', $idPraktikum)->value('nama_praktikum');
        
        $datas = $modules->where('id_praktikum', $idPraktikum)->get();

    	return view('pages.list-modul', compact('datas', 'nama_praktikum', 'id_praktikum'));
    }

    public function addModul($id) {
        $dataPraktikum = Praktikum::find($id);

    	return view('pages.admin.add-modul', compact('dataPraktikum'));	
    }

    public function editModul($id) {
        $modul = Modul::find($id);

        return view('pages.admin.edit-modul', compact('modul')); 
    }

    // storing uploaded files
    public function store(UploadRequest $req) {
    	// storing uploaded image to storage/app/public/modul_thumb (public disk)
    	// $image = $req->modul_image->storeAs('modul/thumbs', 'public');

        // storing pdf docs to ....
        $modul = $req->modul_file->storeAs('modul/files', 'modul_'.$req->no_modul,'public');
        $tesawal = $req->tesawal_file->storeAs('modul/files/tes_awal', 'tesawal_'.$req->no_modul,'public');

    	Modul::create([
            'id_praktikum' => $req->id_praktikum,
            'no_modul' => $req->no_modul,
    		'judul_modul' => $req->judul_modul,
    		'penyusun_modul' => $req->penyusun_modul,
            'modul_file' => $modul, // store the path and filename
            'tesawal_file' => $tesawal, // store the path and filename
		]);

    	return redirect( $req->id_praktikum . '/list-modul');
    }

    public function update(UploadRequest $req, $id) {
        $modul = Modul::find($id);
        $modul->no_modul = $req->no_modul;
        $modul->judul_modul = $req->judul_modul;
        $modul->penyusun_modul = $req->penyusun_modul;
        $modul->modul_file = $req->modul_file;
        $modul->tesawal_file = $req->tesawal_file;
        $modul->save();

        return redirect( $req->id_praktikum . '/list-modul');
    }

    // showing modul pdf
    public function showModul($id) {
        $modul = Modul::find($id);

        return view('pages.show-modul', compact('modul'));
    }

    // showing tes pdf
    public function showTest($id) {
        $modul = Modul::find($id);

        return view('pages.show-test', compact('modul'));
    }

    // Evaluating test
    public function evalTest(Request $req, $noModul) {
        /* parse key file */
        $key = file_get_contents(
            'storage/keys/ta_modul' .$noModul. '.txt'
        );
        /* end */

        // saving user data to database
        Praktikan::create([
            'nama' => $req->nama_praktikan,
            'nim' => $req->nim_praktikan,
            'kelas' => $req->kelas_praktikan,
            'shift' => $req->shift_praktikan,
        ]);

        // counting score based on the answered choices
        $answer = $req->answer;
        $score = 0;
        for ($i=0; $i < strlen($key); $i++) {   
            if ($key[$i] == $answer[$i]) $score++;
        }

        // find modul by id
        $modul = Modul::find($req->test_id);

        $id_praktikum = $req->praktikum_id;

        return view('pages.show-score', compact('score', 'modul', 'id_praktikum'));
    }
}
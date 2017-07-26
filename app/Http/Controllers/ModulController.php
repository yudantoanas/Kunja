<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use Smalot\PdfParser\Parser;

use App\Modul;
use App\Praktikum;

use Storage;
use DB;

class ModulController extends Controller
{
    // showing list of modul
    public function index($idPraktikum) {
    	// retrieve all Modul's data
    	$modules = new Modul();
        $nama_praktikum = Praktikum::where('id', $idPraktikum)->value('nama_praktikum');
        
        $datas = $modules->where('id_praktikum', $idPraktikum)->get();

    	return view('pages.list-modul', compact('datas', 'nama_praktikum'));
    }

    public function addModul($id) {
        $dataPraktikum = Praktikum::find($id);

    	return view('pages.admin.add-modul', compact('dataPraktikum'));	
    }

    // storing uploaded files
    public function store(UploadRequest $req) {
    	// storing uploaded image to storage/app/public/modul_thumb (public disk)
    	$image = $req->modul_image->store('modul/thumbs', 'public');

        // storing pdf docs to ....
        $modul = $req->modul_file->store('modul/files', 'public');
        $tesawal = $req->tesawal_file->store('modul/files/tes_awal', 'public');
        $tesakhir = $req->tesakhir_file->store('modul/files/tes_akhir', 'public');

    	Modul::create([
            'id_praktikum' => $req->id_praktikum,
            'no_modul' => $req->no_modul,
    		'judul_modul' => $req->judul_modul,
    		'penyusun_modul' => $req->penyusun_modul,
    		'modul_image' => $image, // store the path and filename
            'modul_file' => $modul, // store the path and filename
            'tesawal_file' => $tesawal, // store the path and filename
            'tesakhir_file' => $tesakhir, // store the path and filename
    		]);

    	return redirect('list-praktikum');
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

    public function evalTest(Request $req, $noModul) {
        /* parse key file */
        $key = file_get_contents(
            'storage/keys/ta_modul' .$noModul. '.txt'
        );
        /* end */

        // counting score based on the answered choices
        $answer = $req->answer;
        $score = 0;
        for ($i=0; $i < strlen($key); $i++) {   
            if ($key[$i] == $answer[$i]) $score++;
        }

        // find modul by id
        $modul = Modul::find($req->test_id);

        return view('pages.show-score', compact('score', 'modul'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Requests\EvaluateTest;
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
    public function index($idPraktikum)
    {
        // retrieve all Modul's data

        $praktikum = new Praktikum();
        $modul = new Modul();
        $nama_praktikum = $praktikum->where('id', $idPraktikum)->value('nama_praktikum');
        $modul_data = $modul->where('praktikum_id', $idPraktikum)->get();

        return view('pages.list-modul')->with([
            'datas' => $modul_data,
            'nama_praktikum' => $nama_praktikum,
            'id_praktikum' => $idPraktikum
        ]);
    }

    public function addModul($id)
    {
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

        $modulBaru = new Modul();
        $modulBaru->praktikum_id = $req->id_praktikum;
        $modulBaru->no_modul = $req->no_modul;
        $modulBaru->judul_modul = $req->judul_modul;
        $modulBaru->penyusun_modul = $req->penyusun_modul;
        $modulBaru->modul_file = $modul;
        $modulBaru->tesawal_file = $tesawal;
        $modulBaru->save();

        return redirect($req->id_praktikum . '/list-modul');
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
    public function showModul($id)
    {
        $modul = new Modul();
        $theModul = $modul->find($id);

        return view('pages.show-modul')->with([
            'modul' => $theModul
        ]);
    }

    // showing tes pdf
    public function showTest($id)
    {
        $modul = new Modul();
        $theModul = $modul->where('no_modul', $id)->first();

        return view('pages.show-test')->with([
            'modul' => $theModul
        ]);
    }

    // Evaluating test
    public function evalTest(EvaluateTest $req, $noModul)
    {
        /* parse key file */
        $key = file_get_contents(
            'storage/keys/ta_modul' . $noModul . '.txt'
        );
        /* end */

        // counting score based on the answered choices
        $answer = $req->answer;
        $score = 0;
        /*for ($i = 0; $i < strlen($key); $i++) {
            if ($key[$i] == $answer[$i]) $score++;
        }*/
        while($ele = current($answer)){

            if($key[key($answer)] == $ele) $score++;

            next($answer);
        }

        // saving user data to database
        $praktikan = new Praktikan();
        $praktikan->nama = $req->nama_praktikan;
        $praktikan->nim = $req->nim_praktikan;
        $praktikan->kelas = $req->kelas_praktikan;
        $praktikan->shift = $req->shift_praktikan;
        $praktikan->ta_score = $score;
        $praktikan->modul_id = $req->modul_id;
        $praktikan->praktikum_id = $req->praktikum_id;
        $praktikan->save();

        // find modul by id
        $modul = new Modul();
        $theModul = $modul->find($req->modul_id);

        $id_praktikum = $req->praktikum_id;

        return view('pages.show-score')->with([
            'score' => $score,
            'modul' => $theModul,
            'id_praktikum' => $id_praktikum
        ]);
    }
}
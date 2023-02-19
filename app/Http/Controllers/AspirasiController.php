<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\Kategori;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use App\Models\InputAspirasi;

class AspirasiController extends Controller
{
    public function create() {
        $aspirasi = Aspirasi::latest();
        $urut = $aspirasi->max('id');
        return view('formAspirasi', [
            'title' => ' Pengisian Formulir Keluhan',
            'kategori' => Kategori::all(),
            'noUrut' => abs($urut + 1)
        ]);
    }

    public function store(Request $request) {
        $dataAspirasi = $request->validate([
            'nik' => 'required',
            'kategori_id' => 'required',
            'lokasi' => 'required',
            'keterangan' => 'required'
        ]);
        $dataPenduduk = Penduduk::all()->where("nik",$request->nik)->count();
        if($dataPenduduk > 0) {
            InputAspirasi::create($dataAspirasi);
            Aspirasi::create([
                'id' => $request->id,
                'id_aspirasi' => $request->id_aspirasi,
                'kategori_id' => $request->kategori_id
            ]);
            return redirect('formAspirasi')->with('status', 1);
        } else {
            return redirect('formAspirasi')->with('status', 2);
        }
        
    }
}

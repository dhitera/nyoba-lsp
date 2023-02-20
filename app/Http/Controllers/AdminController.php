<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\Kategori;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return View('adminPage', [
            'title' => 'Admin',
            'kategori' => Kategori::all(),
            'aspirasi' => Aspirasi::latest()->where('feedback',  null)->filter(request(['search', 'kategori', 'waktu', 'status']))->paginate(5),
            'selesai' => Aspirasi::latest()->where('status', "Selesai")->where('feedback', '!=', null)->filter(request(['search', 'kategori', 'waktu']))->paginate(5)
        ]);
    }

    public function status(Request $request)
    {
        Aspirasi::where('id_aspirasi',  $request->id_aspirasi)
        ->update(['status' => $request->status]);
        return redirect('/admin');
    }
}

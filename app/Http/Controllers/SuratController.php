<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;

class SuratController extends Controller
{
    // Menampilkan halaman CRUD Data Surat
    public function index()
    {
        $surats = Surat::all();
        return view('crud', compact('surats'));
    }

    // Menyimpan data surat baru
    public function store(Request $request)
    {
        $surat = new Surat;
        $surat->nik = $request->nik;
        $surat->tempat_lahir = $request->tempat_lahir;
        $surat->alamat = $request->alamat;
        $surat->keterangan = $request->keterangan;
        $surat->berlaku_dari = $request->berlaku_dari;
        $surat->berlaku_sampai = $request->berlaku_sampai;
        $surat->penerbit = $request->penerbit;
        $surat->save();

        return redirect('/crud-surat');
    }
}

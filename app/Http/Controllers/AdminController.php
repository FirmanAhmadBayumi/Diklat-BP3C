<?php

namespace App\Http\Controllers;

use App\Models\data_diklat;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function lihat_data_diklat(){
        $data_diklat = [
            'title' => 'Data Diklat',
        ];

        return view('admin.data_diklat', $data_diklat);
    }

    public function tambah_diklat(Request $request){
        $request->validate([
            'nama_diklat' => 'required',
            'nama_kelas' => 'required',
            'nama_instruktur' => 'required',
            'tgl_mulai_diklat' => 'required',
            'tgl_selesai_diklat' => 'required',
            'jam_mulai_diklat' => 'required',
            'jam_selesai_diklat' => 'required',
        ]);

        data_diklat::create($request->all());

        return redirect()->back()->with('success', 'Data berhasil masuk');
    }
}

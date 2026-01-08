<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function lihat_data_diklat(){
        $data_diklat = [
            'title' => 'Data Diklat',
        ];

        return view('admin.data_diklat', $data_diklat);
    }

    // public function tambah_diklat(){
    //     $tambah_diklat = [
    //         'title' => 'Tambah Diklat',
    //     ];

    //     return view('admin.tambah_diklat', $tambah_diklat);
    // }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function lihat_data_diklat(){
        return view('admin.data_diklat');
    }

    public function tambah_diklat(){
        return view('admin.tambah_diklat');
    }
}

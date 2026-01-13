<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\data_diklat;

//Index
Route::get('/', function () {
    $data_diklat = [
        'title' => 'Pelaksanaan Diklat',
        'tampil_diklat' => data_diklat::first()
    ];
    
    return view('index', $data_diklat);
});

//Admin
Route::get('/data_diklat', [AdminController::class, 'lihat_data_diklat']);
Route::post('/tambah_diklat', [AdminController::class, 'tambah_diklat'])->name('tambah.diklat');
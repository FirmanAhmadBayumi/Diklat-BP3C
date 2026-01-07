<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

//Admin
Route::get('/data_diklat', [AdminController::class, 'lihat_data_diklat']);
Route::get('/tambah_diklat', [AdminController::class, 'tambah_diklat'])->name('tambah.diklat');
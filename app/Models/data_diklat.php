<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_diklat extends Model
{
    use HasFactory;

    protected $table = 'data_diklat';

    protected $fillable = [
        'nama_diklat',
        'nama_kelas',
        'nama_instruktur',
        'tgl_mulai_diklat',
        'tgl_selesai_diklat',
        'jam_mulai_diklat',
        'jam_selesai_diklat',
    ];
}

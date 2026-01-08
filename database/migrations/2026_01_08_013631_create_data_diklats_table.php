<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_diklat', function (Blueprint $table) {
            $table->id('id_diklat');
            $table->string('nama_diklat', 150);
            $table->string('nama_kelas', 50);
            $table->string('nama_instruktur', 75);
            $table->date('tgl_mulai_diklat');
            $table->date('tgl_selesai_diklat');
            $table->time('jam_mulai_diklat');
            $table->time('jam_selesai_diklat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::dropIfExists('data_diklats');
    }
};

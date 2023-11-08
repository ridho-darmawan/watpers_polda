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
        Schema::create('izin_nikah', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->integer('nrp');
            $table->string('foto');
            $table->string('kta_ktp_calon');
            $table->string('ktp_kk_orangtua');
            $table->string('skep_pangkatterakhir');
            $table->string('skck');
            $table->string('akta_kelahiran');
            $table->string('kartu_keluargacalon');
            $table->string('dokumen_n1');
            $table->string('dokumen_n2');
            $table->string('dokumen_n3');
            $table->string('dokumen_n4');
            $table->string('ijazah');
            $table->string('akta_cerai');
            $table->string('surat_pengantar');
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('izin_nikah');
    }
};

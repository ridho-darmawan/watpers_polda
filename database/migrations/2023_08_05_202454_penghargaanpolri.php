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
        Schema::create('penghargaan_polri', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->integer('nrp');
            $table->string('surat_keputusanpengangkatan');
            $table->string('surat_keputusanpenepatan_pangkat');
            $table->string('daftar_riwayathidup');
            $table->string('surat_perintah');
            $table->string('surat_keterangan_kplb');
            $table->string('laporan_kronologis1');
            $table->string('visum');
            $table->string('surat_keterangankematian');
            $table->string('laporan_kronologis2');
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penghargaan_polri');
    }
};

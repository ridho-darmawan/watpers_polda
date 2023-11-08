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
        Schema::create('status_gugur', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->integer('nrp');
            $table->string('laporan_kronologikejadian');
            $table->string('suratkeputusan_pengangkatanpertama');
            $table->string('suratkeputusan_penempatanpangkat');
            $table->string('kartu_tandaanggota');
            $table->string('kartu_tandapeserta');
            $table->string('surat_keterangankematian');
            $table->string('visum');
            $table->string('surat_nikah');
            $table->string('kartu_tandapenduduk');
            $table->string('kartu_keluarga');
            $table->string('surat_keterangan_ahliwaris');
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_gugur');
    }
};

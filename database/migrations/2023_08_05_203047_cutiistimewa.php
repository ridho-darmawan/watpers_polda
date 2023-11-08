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
        Schema::create('cuti_istimewa', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->integer('nrp');
            $table->string('permohonan_tertulis');
            $table->string('smk_terakhir');
            $table->string('surat_perintahatugas');
            $table->string('pesyaratan_pegawai');
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuti_istimewa');
    }
};

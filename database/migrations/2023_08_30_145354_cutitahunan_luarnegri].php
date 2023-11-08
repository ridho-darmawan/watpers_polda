<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('cuti_tahunanluarnegri', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->integer('nrp');
            $table->string('permohonan_tertulis');
            $table->string('daftar_riwayathidup');
            $table->string('sk_pengangkatan');
            $table->string('surat_permohonan1');
            $table->string('surat_permohonan2');
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuti_tahunanluarnegri');
    }
};

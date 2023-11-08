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
        Schema::create('izin_rujuk', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->integer('nrp');
            $table->string('surat_permohonanrujuk');
            $table->string('masa_iddah');
            $table->string('akta_cerai');
            $table->string('surat_persetujuan');
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('izin_rujuk');
    }
};

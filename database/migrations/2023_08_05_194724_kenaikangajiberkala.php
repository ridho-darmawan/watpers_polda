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
        Schema::create('kenaikan_gajiberkala', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->integer('nrp');
            $table->string('nilai_smk');
            $table->string('penilaiaan_prestasikerja');
            $table->string('kep_pangkatpertama');
            $table->string('kep_pangkatterakhir');
            $table->string('kep_kenaikangaji');
            $table->string('surat_kenaikangaji');
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kenaikan_gajiberkala');
    }
};

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
        Schema::create('izin_cerai', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->integer('nrp');
            $table->string('akta_nikah');
            $table->string('surat_permohonancerai');
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('izin_cerai');
    }
};

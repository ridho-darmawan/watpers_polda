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
        Schema::create('beladiri', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->integer('nrp');

            $table->integer('teknik_dasar1');
            $table->integer('teknik_dasar2');
            $table->integer('teknik_dasar3');
            $table->integer('teknik_dasar4');
            $table->integer('teknik_dasar5');
            $table->integer('teknik_dasar6');
            $table->integer('teknik_tanpaalat1');
            $table->integer('teknik_tanpaalat2');
            $table->integer('teknik_tanpaalat3');
            $table->integer('teknik_tanpaalat4');
            $table->integer('teknik_tanpaalat5');
            $table->integer('teknik_tanpaalat6');
            $table->integer('teknik_tanpaalat7');
            $table->integer('teknik_tanpaalat8');
            $table->integer('teknik_tanpaalat9');
            $table->integer('teknik_tanpaalat10');
            $table->integer('teknik_alat1_alat1');
            $table->integer('teknik_alat_alat2');
            $table->integer('teknik_alat_alat3');
            $table->integer('teknik_alat_alat4');
            $table->integer('jumlah');
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beladiri');
    }
};

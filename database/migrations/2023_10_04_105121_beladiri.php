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
            $table->integer('jumlah_teknik_dasar_jatuh1');
            $table->integer('tgerak_teknik_dasar_jatuh1');
            $table->integer('sgerak_teknik_dasar_jatuh1');
            $table->integer('motivasi_teknik_dasar_jatuh1');
            $table->integer('penampilan_teknik_dasar_jatuh1');
            $table->string('ket_teknik_dasar_jatuh1')->nullable();

            $table->integer('jumlah_teknik_dasar_jatuh2');
            $table->integer('tgerak_teknik_dasar_jatuh2');
            $table->integer('sgerak_teknik_dasar_jatuh2');
            $table->integer('motivasi_teknik_dasar_jatuh2');
            $table->integer('penampilan_teknik_dasar_jatuh2');
            $table->string('ket_teknik_dasar_jatuh2')->nullable();

            $table->integer('jumlah_teknik_dasar_jatuh3');
            $table->integer('tgerak_teknik_dasar_jatuh3');
            $table->integer('sgerak_teknik_dasar_jatuh3');
            $table->integer('motivasi_teknik_dasar_jatuh3');
            $table->integer('penampilan_teknik_dasar_jatuh3');
            $table->string('ket_teknik_dasar_jatuh3')->nullable();
            $table->integer('jumlah_teknik_dasar_jatuh4');
            $table->integer('tgerak_teknik_dasar_jatuh4');
            $table->integer('sgerak_teknik_dasar_jatuh4');
            $table->integer('motivasi_teknik_dasar_jatuh4');
            $table->integer('penampilan_teknik_dasar_jatuh4');
            $table->string('ket_teknik_dasar_jatuh4')->nullable();
            $table->integer('jumlah_dasar_beladiri1');
            $table->integer('tgerak_dasar_beladiri1');
            $table->integer('sgerak_dasar_beladiri1');
            $table->integer('motivasi_dasar_beladiri1');
            $table->integer('penampilan_dasar_beladiri1');
            $table->string('ket_dasar_beladiri1')->nullable();
            $table->integer('jumlah_dasar_beladiri2');
            $table->integer('tgerak_dasar_beladiri2');
            $table->integer('sgerak_dasar_beladiri2');
            $table->integer('motivasi_dasar_beladiri2');
            $table->integer('penampilan_dasar_beladiri2');
            $table->string('ket_dasar_beladiri2')->nullable();
            $table->integer('jumlah_dasar_beladiri3');
            $table->integer('tgerak_dasar_beladiri3');
            $table->integer('sgerak_dasar_beladiri3');
            $table->integer('motivasi_dasar_beladiri3');
            $table->integer('penampilan_dasar_beladiri3');
            $table->string('ket_dasar_beladiri3')->nullable();
            $table->integer('jumlah_kombinasiteknik_beladiri1');
            $table->integer('tgerak_kombinasiteknik_beladiri1');
            $table->integer('sgerak_kombinasiteknik_beladiri1');
            $table->integer('motivasi_kombinasiteknik_beladiri1');
            $table->integer('penampilan_kombinasiteknik_beladiri1');
            $table->string('ket_kombinasiteknik_beladiri1')->nullable();
            $table->integer('jumlah_kombinasiteknik_beladiri2');
            $table->integer('tgerak_kombinasiteknik_beladiri2');
            $table->integer('sgerak_kombinasiteknik_beladiri2');
            $table->integer('motivasi_kombinasiteknik_beladiri2');
            $table->integer('penampilan_kombinasiteknik_beladiri2');
            $table->string('ket_kombinasiteknik_beladiri2')->nullable();
            $table->integer('jumlah_kombinasiteknik_beladiri3');
            $table->integer('tgerak_kombinasiteknik_beladiri3');
            $table->integer('sgerak_kombinasiteknik_beladiri3');
            $table->integer('motivasi_kombinasiteknik_beladiri3');
            $table->integer('penampilan_kombinasiteknik_beladiri3');
            $table->string('ket_kombinasiteknik_beladiri3')->nullable();
            $table->integer('rangkaian1');
            $table->integer('rangkaian2');

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

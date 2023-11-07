<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('surat', function (Blueprint $table) {
            $table->id();
            $table->string('judul_surat');
            $table->string('nomor_surat');
            $table->string('jenis_surat');
            $table->date('tanggal_surat');
            $table->string('perihal');
            $table->string('nrp');
            $table->string('tembusan');
            $table->longText('rujukan');
            $table->string('pengirim');
            $table->string('penerima');
            // $table->enum('tembusan', ['paur', 'kasubbag_rohjashor', 'kasubbag_khirdin', 'kabag', 'karo_sdm']);
            $table->longText('deskripsi_surat');
            // $table->string('tanda_tangan')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat');
    }
};

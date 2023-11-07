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
        Schema::create('jasmaniberkala', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->integer('nrp');
            $table->string('pangkat');
            $table->string('jabatan');
            $table->string('kesatuan');
            $table->date('tanggal_lahir');
            $table->string('umur');
            $table->string('golongan');
            $table->integer('lari_12_menit');
            $table->integer('gerakan_pull_up');
            $table->integer('gerakan_push_up');
            $table->integer('gerakan_sit_up');
            $table->integer('putaran_shuttle_run');
            $table->integer('nilai_rata_rata');
            $table->integer('nilai_akhir');
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jasmaniberkala');
    }
};

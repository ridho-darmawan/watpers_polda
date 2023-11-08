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
        Schema::create('rekomendasikebugaran', function (Blueprint $table) {
            $table->id('id');
            $table->string('judul_artikel');
            $table->longText('deskripsi_artikel');
            $table->string('foto_artikel');
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekomendasikebugaran');
    }
};

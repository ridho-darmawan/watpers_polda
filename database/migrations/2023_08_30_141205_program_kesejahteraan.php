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
        Schema::create('program_kesejahteraan', function (Blueprint $table) {
            $table->id('id');
            $table->string('judul_artikel');
            $table->string('deskripsi_artikel');
            $table->string('foto_artikel');
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_kesejahteraan');
    }
};

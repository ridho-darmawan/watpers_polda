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
        Schema::create('adl', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->integer('nrp');
            $table->enum('pertanyaan1', ['0', '1', '2', '3']);
            $table->enum('pertanyaan2', ['0', '1', '2', '3']);
            $table->enum('pertanyaan3', ['0', '1', '2', '3']);
            $table->enum('pertanyaan4', ['0', '1', '2', '3']);
            $table->enum('pertanyaan5', ['0', '1', '2', '3']);
            $table->enum('pertanyaan6', ['0', '1', '2', '3']);
            $table->enum('pertanyaan7', ['0', '1', '2', '3']);
            $table->enum('pertanyaan8', ['0', '1', '2', '3']);
            $table->enum('pertanyaan9', ['0', '1', '2', '3']);
            $table->enum('pertanyaan10', ['0', '1', '2', '3']);
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adl');
    }
};

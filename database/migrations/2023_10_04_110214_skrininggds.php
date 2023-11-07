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
        Schema::create('gds', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->integer('nrp');
            $table->enum('pertanyaan1', ['iya', 'tidak']);
            $table->enum('pertanyaan2', ['iya', 'tidak']);
            $table->enum('pertanyaan3', ['iya', 'tidak']);
            $table->enum('pertanyaan4', ['iya', 'tidak']);
            $table->enum('pertanyaan5', ['iya', 'tidak']);
            $table->enum('pertanyaan6', ['iya', 'tidak']);
            $table->enum('pertanyaan7', ['iya', 'tidak']);
            $table->enum('pertanyaan8', ['iya', 'tidak']);
            $table->enum('pertanyaan9', ['iya', 'tidak']);
            $table->enum('pertanyaan10', ['iya', 'tidak']);
            $table->enum('pertanyaan11', ['iya', 'tidak']);
            $table->enum('pertanyaan12', ['iya', 'tidak']);
            $table->enum('pertanyaan13', ['iya', 'tidak']);
            $table->enum('pertanyaan14', ['iya', 'tidak']);
            $table->enum('pertanyaan15', ['iya', 'tidak']);
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gds');
    }
};

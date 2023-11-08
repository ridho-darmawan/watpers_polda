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
            $table->integer('putaran_lari');
            $table->integer('jarak_lari');
            $table->integer('gerakan_pull_up');
            $table->integer('gerakan_push_up');
            $table->integer('gerakan_sit_up');
            $table->integer('putaran_shuttle_run');
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

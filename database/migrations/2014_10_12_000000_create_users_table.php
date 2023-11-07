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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pangkat');
            $table->string('jabatan');
            $table->string('email')->unique();
            $table->integer('nrp');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->enum('level', ['admin', 'personil', 'paur', 'kasubbag_rohjashor', 'kasubbag_khirdinlur', 'kabag', 'karo_sdm']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('status_agama', ['Islam', 'Kristen', 'Hindu', 'Buddha']);
            $table->string('status_keluarga')->nullable();
            $table->string('foto');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

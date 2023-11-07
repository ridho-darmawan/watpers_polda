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
        Schema::create('tanda_kehormatan', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->string('nrp');
            $table->longText('syarat_pengajuan');
            $table->string('file_syarat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanda_kehormatan');
    }
};

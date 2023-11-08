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
            $table->integer('nrp');
            $table->enum('tanda_kehormatan', ['satyalancana_pengabdian8', 'satyalancana_pengabdian16', 'satyalancana_pengabdian24', 'satyalancana_pengabdian32', 'satyalancana_bhakti', 'satyalancana_ksatria', 'satyalancana_karyabhakti', 'satyalancana_operasipolisi', 'satyalancana_bhaktibuana', 'satyalancana_nusa']);
            $table->string('surat_perintahjalan');
            $table->string('daftar_riwayathidup');
            $table->string('kep_pangkatterakhir');
            $table->string('kep_jabatanterakhir');
            $table->string('kep_pengangkatanpertama');
            $table->string('skhp');
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

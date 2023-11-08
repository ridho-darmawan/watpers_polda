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
    public function up()
    {
        //
       Schema::create('surat_spesimen', function (Blueprint $table) {
            $table->id('id');
            $table->integer('surat_id', false);
            $table->integer('user_id', false);
            $table->tinyInteger('is_signed', false);
            $table->string('gambar_spesimen')->nullable();
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
        //
        Schema::dropIfExists('surat_spesimen');
    }
};

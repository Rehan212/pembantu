<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('majikan_kode');
            $table->foreign('majikan_kode')->references('id')->on('majikans')->onDelete('cascade');
            $table->unsignedBigInteger('kategori_kode');
            $table->foreign('kategori_kode')->references('id')->on('kategoris')->onDelete('cascade');
            $table->unsignedBigInteger('pembantu_kode');
            $table->foreign('pembantu_kode')->references('id')->on('pembantus')->onDelete('cascade');
            $table->integer('durasi_kontrak');
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
        Schema::dropIfExists('pemesanans');
    }
}

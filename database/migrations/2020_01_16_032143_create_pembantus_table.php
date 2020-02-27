<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembantusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembantus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('pembantu_kode')->unique();
            $table->string('n_pembantu');
            $table->text('alamat_pembantu');
            $table->integer('umur');
            $table->string('jk_pembantu');
            $table->string('pendidikan');
            $table->string('agama');
            $table->string('status');
            $table->string('pengalaman_kerja');
            $table->string('photo_art')->nullable();
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
        Schema::dropIfExists('pembantus');
    }
}

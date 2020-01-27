<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMajikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('majikans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('majikan_kode')->unique();
            $table->string('nama_majikan');
            $table->string('jenis_kelamin');
            $table->text('alamat_majikan');
            $table->integer('no_ktp');
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
        Schema::dropIfExists('majikans');
    }
}

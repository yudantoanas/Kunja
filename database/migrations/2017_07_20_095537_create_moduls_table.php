<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moduls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('praktikum_id')->unsigned();
            $table->integer('no_modul');
            $table->string('judul_modul');
            $table->string('penyusun_modul');
            $table->string('modul_file');
            $table->string('tesawal_file');
            $table->timestamps();

            $table->foreign('praktikum_id')->references('id')->on('praktikums')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moduls');
    }
}

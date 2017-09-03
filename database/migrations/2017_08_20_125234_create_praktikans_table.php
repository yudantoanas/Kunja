<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePraktikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('praktikans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nim');
            $table->string('kelas');
            $table->string('shift');
            $table->integer('ta_score');
            $table->integer('modul_id')->unsigned();
            $table->integer('praktikum_id')->unsigned();
            $table->timestamps();

            $table->foreign('modul_id')->references('id')->on('moduls')->onDelete('cascade');
            $table->foreign('praktikum_id')->references('id')->on('moduls')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('praktikans');
    }
}

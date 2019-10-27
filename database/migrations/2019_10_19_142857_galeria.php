<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Galeria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('galeria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ubicacion');
            $table->unsignedBigInteger('alumno_id');
            $table->foreign('alumno_id')->references('id')->on('alumnos');
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
    }
}

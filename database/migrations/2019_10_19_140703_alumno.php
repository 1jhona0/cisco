<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('alumnos', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('nombre',50);
            $table->string('apellidos',60);
            $table->unsignedInteger('ci')->unique();
            $table->string('cu',10)->nullable($value = true);
            $table->unsignedInteger('celular');
            $table->string('telefono',12)->nullable($value = true);
            $table->string('email')->unique();
            $table->string('direccion',100);
            $table->boolean('estado');
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

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',11)->unique();
            $table->string('nombre', 100);
            $table->string('domicilio', 100);
            $table->string('dni', 8);
            $table->integer('facultad_id')->unsigned();
            $table->foreign('facultad_id')->references('id')->on('facultads');
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
        Schema::drop('estudiantes');
    }
}

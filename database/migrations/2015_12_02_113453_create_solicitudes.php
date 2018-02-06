<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('semestre', 6)->nullable();
            $table->date('fecha');
            $table->decimal('monto', 6, 2);
            $table->string('expediente', 30)->nullable();
            $table->string('garantiza', 70)->nullable();
            $table->string('informe', 10)->default("Deudor");
            $table->string('observacion', 500)->nullable()->default("");

            $table->integer('motivo_id')->unsigned();
            $table->foreign('motivo_id')->references('id')->on('motivos');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->integer('estudiante_id')->unsigned();
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');

            $table->timestamps();

            //Estados posibles del informe son Deudor, No deudor, Observado
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('solicitudes');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotivoHasRequisitos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motivo_has_requisitos', function (Blueprint $table) {
            $table->integer('motivo_id')->unsigned();
            $table->foreign('motivo_id')->references('id')->on('motivos');
            $table->integer('requisito_id')->unsigned();
            $table->foreign('requisito_id')->references('id')->on('requisitos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('motivo_has_requisitos');
    }
}

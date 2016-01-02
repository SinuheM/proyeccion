<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->decimal('monto', 6, 2);
            $table->string('situacion', 2);
            $table->string('observacion', 350);

            $table->integer('solicitud_id')->unsigned();
            $table->foreign('solicitud_id')->references('id')->on('solicitudes');

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
        Schema::drop('informes');
    }
}

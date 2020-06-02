<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadors', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nombre');
            $table->string('apellido');
            $table->integer('edad');
            $table->integer('telefono');
            $table->string('email');

            $table->bigInteger('equipo_id')->unsigned();
            $table->integer('jugador_id')->unsigned();
            $table->string('jugador_type');

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
        Schema::dropIfExists('jugadors');
    }
}

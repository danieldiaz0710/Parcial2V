<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('edad');
            $table->integer('telefono');
            $table->string('email');

            $table->bigInteger('equipo_id')->unsigned();

            $table->foreign('equipo_id')
            ->references('id')
            ->on('equipos');
            


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
        Schema::dropIfExists('direts');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fundadors', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('edad');
            $table->integer('telefono');
            $table->string('email');
            $table->bigInteger('liga_id')->unsigned();
  
          $table->foreign('liga_id')
                ->references('id')
                ->on('ligas');
             
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
        Schema::dropIfExists('fundadors');
    }
}

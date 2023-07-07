<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('id');            
            $table->unsignedBigInteger('r_id_pregunta');
            $table->boolean('r_state',50)->default(true)->nullable();
            $table->string('r_respuesta');
            $table->integer('r_correcta')->default(0)->nullable();
            $table->timestamps();

            //llave foranea a la tabla preguntas
            $table->foreign('r_id_pregunta')->references('id')->on('preguntas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
};

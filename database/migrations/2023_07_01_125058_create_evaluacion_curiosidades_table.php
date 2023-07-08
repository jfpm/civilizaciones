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
        Schema::create('evaluacion_curiosidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ec_pregunta')->nullable();
            $table->text('ec_respuesta');
            $table->integer('ec_resultado')->default(0)->nullable();
            $table->integer('ec_user');//usuario responde
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
        Schema::dropIfExists('evaluacion_curiosidades');
    }
};

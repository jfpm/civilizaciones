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
        Schema::create('evaluacion_culturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ecl_pregunta')->nullable();
            $table->text('ecl_respuesta');
            $table->integer('ecl_resultado')->default(0)->nullable();
            $table->integer('ecl_user');//usuario responde
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
        Schema::dropIfExists('evaluacion_culturas');
    }
};

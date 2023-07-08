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
        Schema::create('evaluacion_adoraciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ea_pregunta')->nullable();
            $table->text('ea_respuesta');
            $table->integer('ea_resultado')->default(0)->nullable();
            $table->integer('ea_user');//usuario responde
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
        Schema::dropIfExists('evaluacion_adoraciones');
    }
};

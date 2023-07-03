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
        Schema::create('pregunta_abiertas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pa_pregunta')->nullable();
            $table->text('pa_respuesta');
            $table->text('pa_modulo');
            $table->integer('pa_user');//usuario responde
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
        Schema::dropIfExists('pregunta_abiertas');
    }
};

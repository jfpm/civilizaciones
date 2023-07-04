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
        Schema::create('items_modules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('im_guid',50);
            $table->string('im_modulo');//curoisdades - culturales - adoraciones
            $table->string('im_color')->default('bg-blue');//curoisdades - culturales - adoraciones
            $table->string('im_item');
            $table->boolean('im_state',50)->default(true)->nullable();
            $table->integer('im_total_visitas')->default(0);
            $table->integer('im_user');//usuario responde
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
        Schema::dropIfExists('items_modules');
    }
};

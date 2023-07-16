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
        Schema::create('contactenos', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('guid');
            $table->boolean('email_sent')->default(false)->nullable();
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
        Schema::dropIfExists('contactenos');
    }
};

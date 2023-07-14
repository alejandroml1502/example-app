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
        Schema::create('FaceTempEx', function (Blueprint $table) {
            $table->increments('TEMPLATEID');
            $table->string('USERNO', 24)->nullable();
            $table->integer('SIZE')->nullable();
            $table->integer('pin')->nullable();
            $table->integer('FACEID')->nullable();
            $table->integer('VALID')->nullable();
            $table->integer('RESERVE')->nullable();
            $table->integer('ACTIVETIME')->nullable();
            $table->integer('VFCOUNT')->nullable();
            $table->binary('TEMPLATE')->nullable();
            $table->tinyInteger('FaceType')->nullable();
            $table->string('StateMigrationFlag', 6)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FaceTempEx');
    }
};

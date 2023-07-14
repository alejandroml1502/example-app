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
        Schema::create('FaceTemp', function (Blueprint $table) {
            $table->increments('TEMPLATEID');
            $table->string('USERNO', 24)->nullable();
            $table->integer('SIZE')->nullable()->default(0);
            $table->integer('pin')->nullable()->default(0);
            $table->integer('FACEID')->nullable()->default(0);
            $table->integer('VALID')->nullable()->default(0);
            $table->integer('RESERVE')->nullable()->default(0);
            $table->integer('ACTIVETIME')->nullable()->default(0);
            $table->integer('VFCOUNT')->nullable()->default(0);
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
        Schema::dropIfExists('FaceTemp');
    }
};

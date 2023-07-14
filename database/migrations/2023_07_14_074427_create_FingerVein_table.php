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
        Schema::create('FingerVein', function (Blueprint $table) {
            $table->increments('FVID');
            $table->integer('UserID')->nullable()->default(0);
            $table->integer('FingerID')->nullable();
            $table->binary('Template')->nullable();
            $table->integer('Size')->nullable()->default(0);
            $table->integer('DuressFlag')->nullable();
            $table->string('UserCode', 50)->nullable();
            $table->integer('Fv_ID_Index')->nullable();
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
        Schema::dropIfExists('FingerVein');
    }
};

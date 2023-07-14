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
        Schema::create('ACUnlockComb', function (Blueprint $table) {
            $table->smallInteger('UnlockCombID')->primary();
            $table->string('Name', 30)->nullable();
            $table->smallInteger('Group01')->nullable();
            $table->smallInteger('Group02')->nullable();
            $table->smallInteger('Group03')->nullable();
            $table->smallInteger('Group04')->nullable();
            $table->smallInteger('Group05')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ACUnlockComb');
    }
};

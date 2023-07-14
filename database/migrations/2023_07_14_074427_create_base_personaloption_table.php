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
        Schema::create('base_personaloption', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->nullable();
            $table->integer('option_id')->nullable();
            $table->string('value', 50)->nullable();
            $table->integer('user_id')->nullable();

            $table->unique(['option_id', 'user_id'], 'UQ__base_per__1F712D6AD1D8059A');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_personaloption');
    }
};

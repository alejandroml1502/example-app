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
        Schema::create('acc_antiback', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->smallInteger('status')->default(0);
            $table->integer('device_id')->nullable();
            $table->boolean('one_mode')->default(false);
            $table->boolean('two_mode')->default(false);
            $table->boolean('three_mode')->default(false);
            $table->boolean('four_mode')->default(false);
            $table->boolean('five_mode')->default(false);
            $table->boolean('six_mode')->default(false);
            $table->boolean('seven_mode')->default(false);
            $table->boolean('eight_mode')->default(false);
            $table->boolean('nine_mode')->default(false);
            $table->integer('AntibackType')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_antiback');
    }
};

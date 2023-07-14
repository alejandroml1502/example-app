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
        Schema::create('acc_levelset', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 30)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 30)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 30)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->smallInteger('status')->default(0);
            $table->string('level_name', 30)->nullable()->default('')->unique('UQ__acc_leve__F94299E92BB9C377');
            $table->integer('level_timeseg_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_levelset');
    }
};

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
        Schema::create('acc_levelset_door_group', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('acclevelset_id');
            $table->integer('accdoor_id');
            $table->integer('accdoor_no_exp')->nullable()->default(0);
            $table->integer('accdoor_device_id')->nullable()->default(0);
            $table->integer('level_timeseg_id')->nullable()->default(0);

            $table->unique(['acclevelset_id', 'accdoor_id'], 'UQ__acc_leve__7FF5F0EDBB915BC0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_levelset_door_group');
    }
};

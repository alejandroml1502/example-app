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
        Schema::create('OfflinePermitDoors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('GroupId')->nullable();
            $table->integer('DeviceId')->nullable();
            $table->integer('DoorNo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('OfflinePermitDoors');
    }
};

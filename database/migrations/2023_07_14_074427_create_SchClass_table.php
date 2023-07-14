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
        Schema::create('SchClass', function (Blueprint $table) {
            $table->increments('schClassid');
            $table->string('schName', 20);
            $table->dateTime('StartTime');
            $table->dateTime('EndTime');
            $table->integer('LateMinutes')->nullable();
            $table->integer('EarlyMinutes')->nullable();
            $table->integer('CheckIn')->nullable()->default(1);
            $table->integer('CheckOut')->nullable()->default(1);
            $table->dateTime('CheckInTime1')->nullable();
            $table->dateTime('CheckInTime2')->nullable();
            $table->dateTime('CheckOutTime1')->nullable();
            $table->dateTime('CheckOutTime2')->nullable();
            $table->integer('Color')->nullable()->default(16715535);
            $table->smallInteger('AutoBind')->nullable()->default(1);
            $table->float('WorkDay', 24, 0)->nullable()->default(0);
            $table->string('SensorID', 50)->nullable();
            $table->float('WorkMins', 24, 0)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SchClass');
    }
};

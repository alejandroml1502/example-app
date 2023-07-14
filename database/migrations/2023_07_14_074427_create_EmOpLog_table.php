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
        Schema::create('EmOpLog', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('USERID');
            $table->dateTime('OperateTime');
            $table->integer('manipulationID')->nullable();
            $table->integer('Params1')->nullable();
            $table->integer('Params2')->nullable();
            $table->integer('Params3')->nullable();
            $table->integer('Params4')->nullable();
            $table->string('SensorId', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('EmOpLog');
    }
};

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
        Schema::create('acc_monitor_log05042022', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status');
            $table->integer('log_tag')->nullable();
            $table->dateTime('time')->nullable();
            $table->string('pin', 50)->nullable();
            $table->string('card_no', 50)->nullable();
            $table->integer('device_id')->nullable();
            $table->string('device_sn', 50)->nullable();
            $table->string('device_name', 50)->nullable();
            $table->integer('verified')->nullable();
            $table->integer('state')->nullable();
            $table->integer('event_type')->nullable();
            $table->string('description', 200)->nullable();
            $table->integer('event_point_type')->nullable();
            $table->integer('event_point_id')->nullable();
            $table->string('event_point_name', 200)->nullable();
            $table->integer('Conexion')->nullable();
            $table->text('MensajeAPI')->nullable();
            $table->boolean('EstatusEnvio')->nullable();
            $table->dateTime('creadoEn')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_monitor_log05042022');
    }
};

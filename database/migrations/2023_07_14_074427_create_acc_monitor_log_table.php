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
        Schema::create('acc_monitor_log', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->default(0);
            $table->integer('log_tag')->nullable();
            $table->dateTime('time')->nullable();
            $table->string('pin', 50)->nullable();
            $table->string('card_no', 50)->nullable();
            $table->integer('device_id')->nullable();
            $table->string('device_sn', 50)->nullable();
            $table->string('device_name', 50)->nullable();
            $table->integer('verified')->nullable()->default(200);
            $table->integer('state')->nullable();
            $table->integer('event_type')->nullable();
            $table->string('description', 200)->nullable();
            $table->integer('event_point_type')->nullable()->default(-1);
            $table->integer('event_point_id')->nullable()->default(-1);
            $table->string('event_point_name', 200)->nullable();
            $table->integer('Conexion')->nullable();
            $table->text('MensajeAPI')->nullable();
            $table->boolean('EstatusEnvio')->nullable();
            $table->dateTime('creadoEn')->nullable()->useCurrent();

            $table->unique(['time', 'pin', 'card_no', 'device_id', 'verified', 'state', 'event_type', 'description', 'event_point_type', 'event_point_id'], 'UQ__acc_moni__EC0AB1E4CA1B9D42');
            $table->unique(['time', 'pin', 'card_no', 'device_id', 'verified', 'state', 'event_type', 'description', 'event_point_type', 'event_point_id'], 'time_pin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_monitor_log');
    }
};

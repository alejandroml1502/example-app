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
        Schema::create('acc_door', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->default(0);
            $table->integer('device_id')->nullable();
            $table->smallInteger('door_no')->nullable();
            $table->string('door_name', 30)->nullable()->default('');
            $table->integer('lock_delay')->nullable()->default(5);
            $table->boolean('back_lock')->default(false);
            $table->integer('sensor_delay')->nullable()->default(15);
            $table->integer('opendoor_type')->nullable()->default(6);
            $table->integer('inout_state')->nullable()->default(0);
            $table->integer('lock_active_id')->nullable()->default(1);
            $table->integer('long_open_id')->nullable();
            $table->integer('wiegand_fmt_id')->nullable()->default(1);
            $table->integer('card_intervaltime')->nullable()->default(2);
            $table->integer('reader_type')->nullable()->default(0);
            $table->boolean('is_att')->default(false);
            $table->string('force_pwd', 100)->nullable()->default('');
            $table->string('supper_pwd', 100)->nullable()->default('');
            $table->integer('door_sensor_status')->nullable()->default(0);
            $table->integer('map_id')->nullable();
            $table->integer('duration_apb')->nullable();
            $table->integer('reader_io_state')->nullable()->default(0);
            $table->integer('open_door_delay')->nullable()->default(15);
            $table->boolean('door_normal_open')->nullable();
            $table->boolean('enable_normal_open')->nullable();
            $table->boolean('disenable_normal_open')->nullable();
            $table->smallInteger('wiegandInType')->nullable()->default(1);
            $table->smallInteger('wiegandOutType')->nullable()->default(1);
            $table->smallInteger('wiegand_fmt_out_id')->nullable()->default(0);
            $table->smallInteger('SRBOn')->nullable()->default(0);
            $table->integer('ManualCtlMode')->nullable();
            $table->integer('ErrTimes')->nullable();
            $table->integer('SensorAlarmTime')->nullable();
            $table->integer('InTimeAPB')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_door');
    }
};

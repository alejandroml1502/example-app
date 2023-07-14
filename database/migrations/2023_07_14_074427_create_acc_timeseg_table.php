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
        Schema::create('acc_timeseg', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->default(0);
            $table->string('timeseg_name', 50)->nullable()->unique('UQ__acc_time__F4DBA3AA5E6060A3');
            $table->string('memo', 70)->nullable()->default('');
            $table->dateTime('sunday_start1')->default('00:00');
            $table->dateTime('sunday_end1')->nullable()->default('00:00');
            $table->dateTime('sunday_start2')->nullable()->default('00:00');
            $table->dateTime('sunday_end2')->nullable()->default('00:00');
            $table->dateTime('sunday_start3')->nullable()->default('00:00');
            $table->dateTime('sunday_end3')->nullable()->default('00:00');
            $table->dateTime('monday_start1')->nullable()->default('00:00');
            $table->dateTime('monday_end1')->nullable()->default('00:00');
            $table->dateTime('monday_start2')->nullable()->default('00:00');
            $table->dateTime('monday_end2')->nullable()->default('00:00');
            $table->dateTime('monday_start3')->nullable()->default('00:00');
            $table->dateTime('monday_end3')->nullable()->default('00:00');
            $table->dateTime('tuesday_start1')->nullable()->default('00:00');
            $table->dateTime('tuesday_end1')->nullable()->default('00:00');
            $table->dateTime('tuesday_start2')->nullable()->default('00:00');
            $table->dateTime('tuesday_end2')->nullable()->default('00:00');
            $table->dateTime('tuesday_start3')->nullable()->default('00:00');
            $table->dateTime('tuesday_end3')->nullable()->default('00:00');
            $table->dateTime('wednesday_start1')->nullable()->default('00:00');
            $table->dateTime('wednesday_end1')->nullable()->default('00:00');
            $table->dateTime('wednesday_start2')->nullable()->default('00:00');
            $table->dateTime('wednesday_end2')->nullable()->default('00:00');
            $table->dateTime('wednesday_start3')->nullable()->default('00:00');
            $table->dateTime('wednesday_end3')->nullable()->default('00:00');
            $table->dateTime('thursday_start1')->nullable()->default('00:00');
            $table->dateTime('thursday_end1')->nullable()->default('00:00');
            $table->dateTime('thursday_start2')->nullable()->default('00:00');
            $table->dateTime('thursday_end2')->nullable()->default('00:00');
            $table->dateTime('thursday_start3')->nullable()->default('00:00');
            $table->dateTime('thursday_end3')->nullable()->default('00:00');
            $table->dateTime('friday_start1')->nullable()->default('00:00');
            $table->dateTime('friday_end1')->nullable()->default('00:00');
            $table->dateTime('friday_start2')->nullable()->default('00:00');
            $table->dateTime('friday_end2')->nullable()->default('00:00');
            $table->dateTime('friday_start3')->nullable()->default('00:00');
            $table->dateTime('friday_end3')->nullable()->default('00:00');
            $table->dateTime('saturday_start1')->nullable()->default('00:00');
            $table->dateTime('saturday_end1')->nullable()->default('00:00');
            $table->dateTime('saturday_start2')->nullable()->default('00:00');
            $table->dateTime('saturday_end2')->nullable()->default('00:00');
            $table->dateTime('saturday_start3')->nullable()->default('00:00');
            $table->dateTime('saturday_end3')->nullable()->default('00:00');
            $table->dateTime('holidaytype1_start1')->nullable()->default('00:00');
            $table->dateTime('holidaytype1_end1')->nullable()->default('00:00');
            $table->dateTime('holidaytype1_start2')->nullable()->default('00:00');
            $table->dateTime('holidaytype1_end2')->nullable()->default('00:00');
            $table->dateTime('holidaytype1_start3')->nullable()->default('00:00');
            $table->dateTime('holidaytype1_end3')->nullable()->default('00:00');
            $table->dateTime('holidaytype2_start1')->nullable()->default('00:00');
            $table->dateTime('holidaytype2_end1')->nullable()->default('00:00');
            $table->dateTime('holidaytype2_start2')->nullable()->default('00:00');
            $table->dateTime('holidaytype2_end2')->nullable()->default('00:00');
            $table->dateTime('holidaytype2_start3')->nullable()->default('00:00');
            $table->dateTime('holidaytype2_end3')->nullable()->default('00:00');
            $table->dateTime('holidaytype3_start1')->nullable()->default('00:00');
            $table->dateTime('holidaytype3_end1')->nullable()->default('00:00');
            $table->dateTime('holidaytype3_start2')->nullable()->default('00:00');
            $table->dateTime('holidaytype3_end2')->nullable()->default('00:00');
            $table->dateTime('holidaytype3_start3')->nullable()->default('00:00');
            $table->dateTime('holidaytype3_end3')->nullable()->default('00:00');
            $table->integer('TimeZone1Id')->nullable();
            $table->integer('TimeZone2Id')->nullable();
            $table->integer('TimeZone3Id')->nullable();
            $table->integer('TimeZoneHolidayId')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_timeseg');
    }
};

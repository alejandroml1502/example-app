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
        Schema::create('acc_holidays', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->default(0);
            $table->string('holiday_name', 30)->nullable()->default('')->unique('UQ__acc_holi__A65EC5D56EF439BE');
            $table->integer('holiday_type')->nullable()->default(1);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('loop_by_year')->nullable()->default(2);
            $table->string('memo', 70)->nullable()->default('');
            $table->integer('HolidayNo')->nullable();
            $table->integer('HolidayTZ')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_holidays');
    }
};

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
        Schema::create('HOLIDAYS', function (Blueprint $table) {
            $table->integer('HOLIDAYID')->primary();
            $table->string('HOLIDAYNAME', 20)->nullable();
            $table->smallInteger('HOLIDAYYEAR')->nullable();
            $table->smallInteger('HOLIDAYMONTH')->nullable();
            $table->smallInteger('HOLIDAYDAY')->nullable();
            $table->dateTime('STARTTIME')->nullable();
            $table->smallInteger('DURATION')->nullable();
            $table->smallInteger('HOLIDAYTYPE')->nullable()->default(1);
            $table->string('XINBIE', 4)->nullable();
            $table->string('MINZU', 50)->nullable();
            $table->smallInteger('DeptID')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HOLIDAYS');
    }
};

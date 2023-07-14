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
        Schema::create('acholiday', function (Blueprint $table) {
            $table->increments('primaryid');
            $table->integer('holidayid')->nullable();
            $table->dateTime('begindate')->nullable();
            $table->dateTime('enddate')->nullable();
            $table->integer('timezone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acholiday');
    }
};

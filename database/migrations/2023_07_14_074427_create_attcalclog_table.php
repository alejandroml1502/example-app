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
        Schema::create('attcalclog', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('DeptID')->nullable()->default(0);
            $table->integer('UserId')->nullable();
            $table->dateTime('StartDate')->nullable();
            $table->dateTime('EndDate')->nullable();
            $table->dateTime('OperTime')->nullable();
            $table->integer('Type')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attcalclog');
    }
};

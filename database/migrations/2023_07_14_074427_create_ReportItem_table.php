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
        Schema::create('ReportItem', function (Blueprint $table) {
            $table->increments('RIID');
            $table->integer('RIIndex')->nullable();
            $table->smallInteger('ShowIt')->nullable();
            $table->string('RIName', 12)->nullable();
            $table->string('UnitName', 6)->nullable();
            $table->binary('Formula');
            $table->smallInteger('CalcBySchClass')->nullable();
            $table->smallInteger('StatisticMethod')->nullable();
            $table->smallInteger('CalcLast')->nullable();
            $table->binary('Notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ReportItem');
    }
};

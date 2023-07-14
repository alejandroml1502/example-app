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
        Schema::create('NUM_RUN_DEIL', function (Blueprint $table) {
            $table->smallInteger('NUM_RUNID');
            $table->dateTime('STARTTIME');
            $table->dateTime('ENDTIME')->nullable();
            $table->smallInteger('SDAYS');
            $table->smallInteger('EDAYS')->nullable();
            $table->integer('SCHCLASSID')->nullable()->default(-1);
            $table->smallInteger('OverTime')->nullable();

            $table->primary(['NUM_RUNID', 'SDAYS', 'STARTTIME'], 'NUMID2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NUM_RUN_DEIL');
    }
};

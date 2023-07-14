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
        Schema::create('CHECKINOUT', function (Blueprint $table) {
            $table->integer('USERID');
            $table->dateTime('CHECKTIME')->useCurrent();
            $table->string('CHECKTYPE', 1)->nullable()->default('I');
            $table->integer('VERIFYCODE')->nullable()->default(0);
            $table->string('SENSORID', 5)->nullable();
            $table->increments('LOGID');
            $table->integer('MachineId')->nullable();
            $table->integer('UserExtFmt')->nullable();
            $table->integer('WorkCode')->nullable();
            $table->string('Memoinfo', 20)->nullable();
            $table->string('sn', 20)->nullable();

            $table->primary(['USERID', 'CHECKTIME'], 'USERCHECKTIME1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CHECKINOUT');
    }
};

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
        Schema::create('SHIFT', function (Blueprint $table) {
            $table->increments('SHIFTID');
            $table->string('NAME', 20)->nullable();
            $table->integer('USHIFTID')->nullable()->default(-1);
            $table->dateTime('STARTDATE')->default('1900-1-1');
            $table->dateTime('ENDDATE')->nullable()->default('1900-12-31');
            $table->smallInteger('RUNNUM')->nullable()->default(0);
            $table->integer('SCH1')->nullable()->default(0);
            $table->integer('SCH2')->nullable()->default(0);
            $table->integer('SCH3')->nullable()->default(0);
            $table->integer('SCH4')->nullable()->default(0);
            $table->integer('SCH5')->nullable()->default(0);
            $table->integer('SCH6')->nullable()->default(0);
            $table->integer('SCH7')->nullable()->default(0);
            $table->integer('SCH8')->nullable()->default(0);
            $table->integer('SCH9')->nullable()->default(0);
            $table->integer('SCH10')->nullable()->default(0);
            $table->integer('SCH11')->nullable()->default(0);
            $table->integer('SCH12')->nullable()->default(0);
            $table->smallInteger('CYCLE')->nullable()->default(0);
            $table->smallInteger('UNITS')->nullable()->default(0);

            $table->primary(['SHIFTID'], 'SHIFTS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SHIFT');
    }
};

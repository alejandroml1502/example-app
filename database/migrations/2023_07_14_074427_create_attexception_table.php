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
        Schema::create('attexception', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->default(0);
            $table->integer('UserId')->nullable();
            $table->dateTime('StartTime')->nullable();
            $table->dateTime('EndTime')->nullable();
            $table->integer('ExceptionID')->nullable()->default(0);
            $table->integer('AuditExcID')->nullable()->default(0);
            $table->integer('OldAuditExcID')->nullable()->default(0);
            $table->integer('OverlapTime')->nullable()->default(0);
            $table->integer('TimeLong')->nullable()->default(0);
            $table->integer('InScopeTime')->nullable()->default(0);
            $table->dateTime('AttDate')->nullable();
            $table->integer('OverlapWorkDayTai')->nullable()->default(1);
            $table->integer('OverlapWorkDay')->nullable();
            $table->integer('schindex')->nullable()->default(0);
            $table->integer('Minsworkday')->nullable()->default(0);
            $table->integer('Minsworkday1')->nullable()->default(0);
            $table->integer('schid')->nullable()->default(0);

            $table->unique(['UserId', 'AttDate', 'StartTime'], 'UQ__attexcep__6462F384807F784D');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attexception');
    }
};

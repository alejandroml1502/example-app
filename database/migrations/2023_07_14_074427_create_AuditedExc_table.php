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
        Schema::create('AuditedExc', function (Blueprint $table) {
            $table->increments('AEID');
            $table->integer('UserId')->nullable();
            $table->dateTime('CheckTime');
            $table->integer('NewExcID')->nullable();
            $table->smallInteger('IsLeave')->nullable();
            $table->string('UName', 20)->nullable();
            $table->dateTime('UTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AuditedExc');
    }
};

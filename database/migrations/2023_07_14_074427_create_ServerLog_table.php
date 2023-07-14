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
        Schema::create('ServerLog', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('EVENT', 30);
            $table->integer('USERID');
            $table->string('EnrollNumber', 30)->nullable();
            $table->smallInteger('parameter')->nullable();
            $table->dateTime('EVENTTIME')->useCurrent();
            $table->string('SENSORID', 5)->nullable();
            $table->string('OPERATOR', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ServerLog');
    }
};

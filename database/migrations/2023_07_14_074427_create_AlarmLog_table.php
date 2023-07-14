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
        Schema::create('AlarmLog', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Operator', 20)->nullable();
            $table->string('EnrollNumber', 30)->nullable();
            $table->dateTime('LogTime')->nullable()->useCurrent();
            $table->string('MachineAlias', 20)->nullable();
            $table->integer('AlarmType')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AlarmLog');
    }
};

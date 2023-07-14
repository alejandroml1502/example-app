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
        Schema::create('acc_auxiliary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('device_id')->nullable();
            $table->integer('aux_no')->nullable();
            $table->string('printer_number', 50)->nullable();
            $table->string('aux_name', 50)->nullable();
            $table->integer('aux_state')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_auxiliary');
    }
};

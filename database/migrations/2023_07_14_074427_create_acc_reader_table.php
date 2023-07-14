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
        Schema::create('acc_reader', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('door_id')->nullable();
            $table->integer('reader_no')->nullable();
            $table->string('reader_name', 50)->nullable();
            $table->integer('reader_state')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_reader');
    }
};

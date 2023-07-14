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
        Schema::create('base_operatortemplate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->nullable();
            $table->integer('user_id')->nullable();
            $table->binary('template1')->nullable();
            $table->integer('finger_id')->nullable();
            $table->integer('valid')->nullable();
            $table->string('fpversion', 50)->nullable();
            $table->integer('bio_type')->nullable();
            $table->dateTime('utime')->nullable();
            $table->binary('bitmap_picture')->nullable();
            $table->binary('bitmap_picture2')->nullable();
            $table->binary('bitmap_picture3')->nullable();
            $table->binary('bitmap_picture4')->nullable();
            $table->integer('use_type')->nullable();
            $table->binary('template2')->nullable();
            $table->binary('template3')->nullable();
            $table->boolean('template_flag');

            $table->unique(['user_id', 'finger_id', 'fpversion'], 'UQ__base_ope__8B92977F52C303D4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_operatortemplate');
    }
};

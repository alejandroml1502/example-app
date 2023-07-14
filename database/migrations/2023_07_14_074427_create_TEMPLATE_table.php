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
        Schema::create('TEMPLATE', function (Blueprint $table) {
            $table->increments('TEMPLATEID');
            $table->integer('USERID');
            $table->integer('FINGERID')->default(0);
            $table->binary('TEMPLATE')->nullable();
            $table->binary('TEMPLATE2')->nullable();
            $table->binary('BITMAPPICTURE')->nullable();
            $table->binary('BITMAPPICTURE2')->nullable();
            $table->binary('BITMAPPICTURE3')->nullable();
            $table->binary('BITMAPPICTURE4')->nullable();
            $table->smallInteger('USETYPE')->nullable();
            $table->string('EMACHINENUM', 3)->nullable();
            $table->binary('TEMPLATE1')->nullable();
            $table->smallInteger('Flag')->nullable();
            $table->smallInteger('DivisionFP')->nullable();
            $table->binary('TEMPLATE4')->nullable();
            $table->binary('TEMPLATE3')->nullable();
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->nullable();
            $table->integer('Valid')->nullable()->default(1);
            $table->string('Fpversion', 50)->nullable();
            $table->integer('bio_type')->nullable()->default(0);
            $table->integer('SN')->nullable();
            $table->dateTime('UTime')->nullable();
            $table->string('StateMigrationFlag', 6)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TEMPLATE');
    }
};

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
        Schema::create('devcmds_bak', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->default(0);
            $table->integer('SN_id')->nullable();
            $table->integer('CmdOperate_id')->nullable();
            $table->string('CmdContent', 50)->nullable();
            $table->dateTime('CmdCommitTime')->default('2011-07-15 16:06:23.952000');
            $table->dateTime('CmdTransTime')->nullable();
            $table->dateTime('CmdOverTime')->nullable();
            $table->integer('CmdReturn')->nullable();
            $table->string('CmdReturnContent', 50)->nullable();
            $table->boolean('CmdImmediately')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devcmds_bak');
    }
};

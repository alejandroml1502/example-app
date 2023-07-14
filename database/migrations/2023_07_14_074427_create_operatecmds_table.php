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
        Schema::create('operatecmds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->string('Author_id', 50)->nullable();
            $table->string('CmdContent', 50)->nullable();
            $table->dateTime('CmdCommitTime')->nullable()->default('2011-07-15 16:06:23.608000');
            $table->dateTime('commit_time')->nullable();
            $table->integer('CmdReturn')->nullable();
            $table->integer('process_count')->nullable()->default(0);
            $table->integer('success_flag')->nullable()->default(1);
            $table->string('receive_data', 50)->nullable();
            $table->integer('cmm_type')->nullable();
            $table->integer('cmm_system')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operatecmds');
    }
};

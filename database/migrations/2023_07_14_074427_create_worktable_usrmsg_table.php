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
        Schema::create('worktable_usrmsg', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->integer('user_id')->nullable();
            $table->string('msg_id', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worktable_usrmsg');
    }
};
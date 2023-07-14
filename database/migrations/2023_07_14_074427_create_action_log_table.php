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
        Schema::create('action_log', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('action_time')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('content_type_id')->nullable();
            $table->integer('object_id')->nullable();
            $table->string('object_repr', 50)->nullable();
            $table->integer('action_flag')->nullable();
            $table->string('change_message', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('action_log');
    }
};

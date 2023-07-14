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
        Schema::create('base_additiondata', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('create_time')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('content_type_id')->nullable();
            $table->string('object_id', 50)->nullable();
            $table->string('key', 50)->nullable();
            $table->string('value', 50)->nullable();
            $table->string('data', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_additiondata');
    }
};

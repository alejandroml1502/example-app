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
        Schema::create('acc_interlock', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->integer('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->default(0);
            $table->integer('device_id')->nullable()->unique('UQ__acc_inte__3B085D8A8B5FC67D');
            $table->boolean('one_mode')->default(false);
            $table->boolean('two_mode')->default(false);
            $table->boolean('three_mode')->default(false);
            $table->boolean('four_mode')->default(false);
            $table->integer('InterlockType')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_interlock');
    }
};

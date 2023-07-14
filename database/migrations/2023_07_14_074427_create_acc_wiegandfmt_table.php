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
        Schema::create('acc_wiegandfmt', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->nullable();
            $table->string('wiegand_name', 30)->default('');
            $table->integer('wiegand_count')->nullable();
            $table->integer('odd_start')->nullable();
            $table->integer('odd_count')->nullable();
            $table->integer('even_start')->nullable();
            $table->integer('even_count')->nullable();
            $table->integer('cid_start')->nullable();
            $table->integer('cid_count')->nullable();
            $table->integer('comp_start')->nullable();
            $table->integer('comp_count')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_wiegandfmt');
    }
};

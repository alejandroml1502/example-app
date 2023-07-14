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
        Schema::create('ACGroup', function (Blueprint $table) {
            $table->smallInteger('GroupID')->primary();
            $table->string('Name', 30)->nullable();
            $table->smallInteger('TimeZone1')->nullable();
            $table->smallInteger('TimeZone2')->nullable();
            $table->smallInteger('TimeZone3')->nullable();
            $table->boolean('holidayvaild');
            $table->integer('verifystyle')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ACGroup');
    }
};

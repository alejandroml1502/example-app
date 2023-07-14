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
        Schema::create('ACTimeZones', function (Blueprint $table) {
            $table->smallInteger('TimeZoneID')->primary();
            $table->string('Name', 30)->nullable();
            $table->dateTime('SunStart')->nullable();
            $table->dateTime('SunEnd')->nullable();
            $table->dateTime('MonStart')->nullable();
            $table->dateTime('MonEnd')->nullable();
            $table->dateTime('TuesStart')->nullable();
            $table->dateTime('TuesEnd')->nullable();
            $table->dateTime('WedStart')->nullable();
            $table->dateTime('WedEnd')->nullable();
            $table->dateTime('ThursStart')->nullable();
            $table->dateTime('ThursEnd')->nullable();
            $table->dateTime('FriStart')->nullable();
            $table->dateTime('FriEnd')->nullable();
            $table->dateTime('SatStart')->nullable();
            $table->dateTime('SatEnd')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ACTimeZones');
    }
};

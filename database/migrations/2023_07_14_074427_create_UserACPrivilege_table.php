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
        Schema::create('UserACPrivilege', function (Blueprint $table) {
            $table->integer('UserID')->primary();
            $table->smallInteger('ACGroupID');
            $table->boolean('IsUseGroup');
            $table->smallInteger('TimeZone1')->nullable();
            $table->smallInteger('TimeZone2')->nullable();
            $table->smallInteger('TimeZone3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UserACPrivilege');
    }
};

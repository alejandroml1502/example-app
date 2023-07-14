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
        Schema::create('USER_TEMP_SCH', function (Blueprint $table) {
            $table->integer('USERID');
            $table->dateTime('COMETIME');
            $table->dateTime('LEAVETIME');
            $table->integer('OVERTIME')->default(0);
            $table->smallInteger('TYPE')->nullable()->default(0);
            $table->smallInteger('FLAG')->nullable()->default(1);
            $table->integer('SCHCLASSID')->nullable()->default(-1);

            $table->primary(['USERID', 'COMETIME', 'LEAVETIME'], 'USER_TEMP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('USER_TEMP_SCH');
    }
};

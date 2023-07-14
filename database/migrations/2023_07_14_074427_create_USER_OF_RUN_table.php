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
        Schema::create('USER_OF_RUN', function (Blueprint $table) {
            $table->integer('USERID');
            $table->integer('NUM_OF_RUN_ID');
            $table->dateTime('STARTDATE')->default('1900-1-1');
            $table->dateTime('ENDDATE')->default('2099-12-31');
            $table->integer('ISNOTOF_RUN')->nullable()->default(0);
            $table->integer('ORDER_RUN')->nullable();

            $table->primary(['USERID', 'NUM_OF_RUN_ID', 'STARTDATE', 'ENDDATE'], 'USER_ST_NUM');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('USER_OF_RUN');
    }
};

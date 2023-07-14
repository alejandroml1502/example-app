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
        Schema::create('USER_SPEDAY', function (Blueprint $table) {
            $table->integer('USERID');
            $table->dateTime('STARTSPECDAY')->default('1900-1-1');
            $table->dateTime('ENDSPECDAY')->nullable()->default('2099-12-31');
            $table->smallInteger('DATEID')->default(-1);
            $table->string('YUANYING', 200)->nullable();
            $table->dateTime('DATE')->nullable();

            $table->primary(['USERID', 'STARTSPECDAY', 'DATEID'], 'USER_SEP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('USER_SPEDAY');
    }
};

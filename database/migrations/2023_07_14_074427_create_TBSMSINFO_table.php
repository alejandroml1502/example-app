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
        Schema::create('TBSMSINFO', function (Blueprint $table) {
            $table->integer('REFERENCE');
            $table->string('SMSID', 16);
            $table->integer('SMSINDEX');
            $table->integer('SMSTYPE')->nullable();
            $table->string('SMSCONTENT', 200)->nullable();
            $table->string('SMSSTARTTM', 20)->nullable();
            $table->integer('SMSTMLENG')->nullable();
            $table->string('GENTM', 20)->nullable();

            $table->primary(['REFERENCE'], 'pk_TBSMSINFO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TBSMSINFO');
    }
};

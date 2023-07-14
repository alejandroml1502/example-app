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
        Schema::create('TBSMSALLOT', function (Blueprint $table) {
            $table->integer('REFERENCE');
            $table->integer('SMSREF');
            $table->integer('USERREF');
            $table->string('GENTM', 20)->nullable();

            $table->primary(['SMSREF', 'USERREF'], 'pk_tbsmsallog');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TBSMSALLOT');
    }
};

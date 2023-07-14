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
        Schema::create('devlog', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('SN_id')->nullable();
            $table->string('OP', 40)->default('TRANSACT');
            $table->string('Object', 50)->nullable();
            $table->integer('Cnt')->default(1);
            $table->integer('ECnt')->default(0);
            $table->dateTime('OpTime')->default('2011-07-15 16:06:23.952000');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devlog');
    }
};

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
        Schema::create('iclock_oplog', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('SN')->nullable();
            $table->integer('admin')->default(0);
            $table->integer('OP')->default(0);
            $table->dateTime('OPTime')->nullable();
            $table->integer('Object')->nullable();
            $table->integer('Param1')->nullable();
            $table->integer('Param2')->nullable();
            $table->integer('Param3')->nullable();

            $table->unique(['SN', 'OPTime'], 'UQ__iclock_o__ECDF8D7484BF3182');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iclock_oplog');
    }
};

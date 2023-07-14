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
        Schema::create('personnel_empchange', function (Blueprint $table) {
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->nullable();
            $table->increments('changeno');
            $table->integer('UserID_id')->nullable();
            $table->dateTime('changedate')->nullable()->default('2011-07-15 16:06:23.936000');
            $table->integer('changepostion')->nullable();
            $table->string('oldvalue', 50)->nullable();
            $table->string('newvalue', 50)->nullable();
            $table->string('changereason', 50)->nullable();
            $table->boolean('isvalid')->default(false);
            $table->integer('approvalstatus')->nullable()->default(2);
            $table->string('remark', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnel_empchange');
    }
};

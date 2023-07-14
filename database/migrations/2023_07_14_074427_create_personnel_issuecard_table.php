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
        Schema::create('personnel_issuecard', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->nullable();
            $table->integer('UserID_id')->nullable();
            $table->string('cardno', 50)->nullable();
            $table->dateTime('effectivenessdate')->nullable();
            $table->boolean('isvalid')->default(true);
            $table->string('cardpwd', 50)->nullable();
            $table->dateTime('failuredate')->nullable();
            $table->string('cardstatus', 50)->nullable()->default('1');
            $table->dateTime('issuedate')->nullable()->default('2011-07-15');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnel_issuecard');
    }
};

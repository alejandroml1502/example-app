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
        Schema::create('CHECKEXACT', function (Blueprint $table) {
            $table->increments('EXACTID');
            $table->integer('USERID')->nullable()->default(0);
            $table->dateTime('CHECKTIME')->nullable()->default('0');
            $table->string('CHECKTYPE', 2)->nullable()->default('0');
            $table->smallInteger('ISADD')->nullable()->default(0);
            $table->string('YUYIN', 25)->nullable();
            $table->smallInteger('ISMODIFY')->nullable()->default(0);
            $table->smallInteger('ISDELETE')->nullable()->default(0);
            $table->smallInteger('INCOUNT')->nullable()->default(0);
            $table->smallInteger('ISCOUNT')->nullable()->default(0);
            $table->string('MODIFYBY', 20)->nullable();
            $table->dateTime('DATE')->nullable();

            $table->primary(['EXACTID'], 'EXACTID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CHECKEXACT');
    }
};

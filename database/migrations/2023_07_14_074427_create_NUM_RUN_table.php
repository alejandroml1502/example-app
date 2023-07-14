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
        Schema::create('NUM_RUN', function (Blueprint $table) {
            $table->increments('NUM_RUNID');
            $table->integer('OLDID')->nullable()->default(-1);
            $table->string('NAME', 30);
            $table->dateTime('STARTDATE')->nullable()->default('2000-1-1');
            $table->dateTime('ENDDATE')->nullable()->default('2099-12-31');
            $table->smallInteger('CYLE')->nullable()->default(1);
            $table->smallInteger('UNITS')->nullable()->default(1);

            $table->primary(['NUM_RUNID'], 'NUMID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NUM_RUN');
    }
};

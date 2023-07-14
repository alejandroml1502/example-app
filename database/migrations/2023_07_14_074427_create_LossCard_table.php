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
        Schema::create('LossCard', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Pin', 20)->nullable();
            $table->string('CardNo', 50)->nullable();
            $table->dateTime('LossDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LossCard');
    }
};

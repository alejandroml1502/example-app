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
        Schema::create('OfflinePermitUsers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('GroupId')->nullable();
            $table->string('Pin', 24)->nullable();
            $table->boolean('ChkPwd')->nullable();
            $table->boolean('ChkFp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('OfflinePermitUsers');
    }
};

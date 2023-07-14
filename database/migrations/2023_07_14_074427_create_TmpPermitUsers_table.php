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
        Schema::create('TmpPermitUsers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('GroupId')->nullable();
            $table->string('CertifiNo', 50)->nullable();
            $table->string('UserName', 24)->nullable();
            $table->string('Gender', 2)->nullable();
            $table->string('CardNo', 20)->nullable();
            $table->dateTime('OfflineBeginDate')->nullable();
            $table->dateTime('OfflineEndDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TmpPermitUsers');
    }
};

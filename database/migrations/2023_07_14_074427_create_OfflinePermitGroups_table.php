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
        Schema::create('OfflinePermitGroups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('GroupName', 24)->nullable();
            $table->dateTime('BeginDate')->nullable();
            $table->dateTime('EndDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('OfflinePermitGroups');
    }
};

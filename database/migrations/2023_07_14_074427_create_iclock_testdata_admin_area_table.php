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
        Schema::create('iclock_testdata_admin_area', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('testdata_id')->nullable();
            $table->integer('area_id')->nullable();

            $table->unique(['testdata_id', 'area_id'], 'UQ__iclock_t__CD3299B3327890DC');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iclock_testdata_admin_area');
    }
};
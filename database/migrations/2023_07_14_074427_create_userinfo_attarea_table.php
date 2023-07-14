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
        Schema::create('userinfo_attarea', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->integer('area_id');

            $table->unique(['employee_id', 'area_id'], 'UQ__userinfo__6CABDD7F9A8D0121');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userinfo_attarea');
    }
};

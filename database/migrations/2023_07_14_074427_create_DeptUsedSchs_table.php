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
        Schema::create('DeptUsedSchs', function (Blueprint $table) {
            $table->integer('DeptId');
            $table->integer('SchId');

            $table->primary(['DeptId', 'SchId'], 'DeptUsedSchs1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DeptUsedSchs');
    }
};

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
        Schema::create('LeaveClass', function (Blueprint $table) {
            $table->increments('LeaveId');
            $table->string('LeaveName', 20);
            $table->float('MinUnit', 0, 0)->default(1);
            $table->smallInteger('Unit')->default(1);
            $table->smallInteger('RemaindProc')->default(1);
            $table->smallInteger('RemaindCount')->default(1);
            $table->string('ReportSymbol', 4)->default('-');
            $table->float('Deduct', 0, 0)->default(0);
            $table->integer('Color')->default(0);
            $table->smallInteger('Classify')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LeaveClass');
    }
};

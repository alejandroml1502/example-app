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
        Schema::create('DEPARTMENTS', function (Blueprint $table) {
            $table->increments('DEPTID');
            $table->string('DEPTNAME', 30)->nullable();
            $table->integer('SUPDEPTID')->default(1);
            $table->smallInteger('InheritParentSch')->nullable()->default(1);
            $table->smallInteger('InheritDeptSch')->nullable()->default(1);
            $table->smallInteger('InheritDeptSchClass')->nullable()->default(1);
            $table->smallInteger('AutoSchPlan')->nullable()->default(1);
            $table->smallInteger('InLate')->nullable()->default(1);
            $table->smallInteger('OutEarly')->nullable()->default(1);
            $table->smallInteger('InheritDeptRule')->nullable()->default(1);
            $table->integer('MinAutoSchInterval')->nullable()->default(24);
            $table->smallInteger('RegisterOT')->nullable()->default(1);
            $table->integer('DefaultSchId')->default(1);
            $table->smallInteger('ATT')->nullable()->default(1);
            $table->smallInteger('Holiday')->nullable()->default(1);
            $table->smallInteger('OverTime')->nullable()->default(1);
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->nullable();
            $table->string('code', 50)->nullable();
            $table->string('type', 50)->nullable();
            $table->dateTime('invalidate')->nullable();

            $table->primary(['DEPTID'], 'DEPTID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DEPARTMENTS');
    }
};

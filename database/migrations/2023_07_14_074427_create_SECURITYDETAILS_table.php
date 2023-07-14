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
        Schema::create('SECURITYDETAILS', function (Blueprint $table) {
            $table->increments('SECURITYDETAILID');
            $table->smallInteger('USERID')->nullable();
            $table->smallInteger('DEPTID')->nullable();
            $table->smallInteger('SCHEDULE')->nullable();
            $table->smallInteger('USERINFO')->nullable();
            $table->smallInteger('ENROLLFINGERS')->nullable();
            $table->smallInteger('REPORTVIEW')->nullable();
            $table->string('REPORT', 10)->nullable();

            $table->primary(['SECURITYDETAILID'], 'NAMEID2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SECURITYDETAILS');
    }
};

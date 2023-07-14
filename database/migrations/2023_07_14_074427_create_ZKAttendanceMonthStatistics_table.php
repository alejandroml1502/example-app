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
        Schema::create('ZKAttendanceMonthStatistics', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('USERID')->nullable();
            $table->integer('PortalSite')->nullable();
            $table->integer('Department')->nullable();
            $table->integer('Employee')->nullable();
            $table->integer('Year')->nullable();
            $table->integer('Month')->nullable();
            $table->decimal('YingDao', 9, 1)->nullable();
            $table->decimal('ShiDao', 9, 1)->nullable();
            $table->decimal('ChiDao', 9, 1)->nullable();
            $table->decimal('ZaoTui', 9, 1)->nullable();
            $table->decimal('KuangGong', 9, 1)->nullable();
            $table->decimal('JiaBan', 9, 1)->nullable();
            $table->decimal('WaiChu', 9, 1)->nullable();
            $table->decimal('YinGongWaiChu', 9, 1)->nullable();
            $table->decimal('GongZuoShiJian', 9, 1)->nullable();
            $table->decimal('YingQian', 9, 1)->nullable();
            $table->decimal('QianDao', 9, 1)->nullable();
            $table->decimal('QianTui', 9, 1)->nullable();
            $table->decimal('WeiQianDao', 9, 1)->nullable();
            $table->decimal('WeiQianTui', 9, 1)->nullable();
            $table->decimal('QingJia', 9, 1)->nullable();
            $table->decimal('PingRi', 9, 1)->nullable();
            $table->decimal('ZhouMo', 9, 1)->nullable();
            $table->decimal('JieJiaRi', 9, 1)->nullable();
            $table->decimal('ChuQinShiJian', 9, 1)->nullable();
            $table->decimal('PingRiJiaBan', 9, 1)->nullable();
            $table->decimal('ZhouMoJiaBan', 9, 1)->nullable();
            $table->decimal('JieJiaRiJiaBan', 9, 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ZKAttendanceMonthStatistics');
    }
};

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
        Schema::create('userinfoBk', function (Blueprint $table) {
            $table->increments('USERID');
            $table->string('Badgenumber', 50)->nullable();
            $table->string('SSN', 20)->nullable();
            $table->string('Name', 50)->nullable();
            $table->string('Gender', 8)->nullable();
            $table->string('TITLE', 20)->nullable();
            $table->string('PAGER', 20)->nullable();
            $table->dateTime('BIRTHDAY')->nullable();
            $table->dateTime('HIREDDAY')->nullable();
            $table->string('street', 80)->nullable();
            $table->string('CITY', 50)->nullable();
            $table->string('STATE', 50)->nullable();
            $table->string('ZIP', 50)->nullable();
            $table->string('OPHONE', 20)->nullable();
            $table->string('FPHONE', 20)->nullable();
            $table->smallInteger('VERIFICATIONMETHOD')->nullable();
            $table->integer('DEFAULTDEPTID')->nullable();
            $table->smallInteger('SECURITYFLAGS')->nullable();
            $table->smallInteger('ATT');
            $table->smallInteger('INLATE');
            $table->smallInteger('OUTEARLY');
            $table->smallInteger('OVERTIME');
            $table->smallInteger('SEP');
            $table->smallInteger('HOLIDAY');
            $table->string('MINZU', 8)->nullable();
            $table->string('PASSWORD', 20)->nullable();
            $table->smallInteger('LUNCHDURATION')->nullable();
            $table->binary('PHOTO')->nullable();
            $table->string('mverifypass', 10)->nullable();
            $table->binary('Notes')->nullable();
            $table->integer('privilege')->nullable();
            $table->smallInteger('InheritDeptSch')->nullable();
            $table->smallInteger('InheritDeptSchClass')->nullable();
            $table->smallInteger('AutoSchPlan')->nullable();
            $table->integer('MinAutoSchInterval')->nullable();
            $table->smallInteger('RegisterOT')->nullable();
            $table->smallInteger('InheritDeptRule')->nullable();
            $table->smallInteger('EMPRIVILEGE')->nullable();
            $table->string('CardNo', 20)->nullable();
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->nullable();
            $table->string('lastname', 50)->nullable();
            $table->integer('AccGroup')->nullable();
            $table->string('TimeZones', 50)->nullable();
            $table->string('identitycard', 50)->nullable();
            $table->dateTime('UTime')->nullable();
            $table->string('Education', 50)->nullable();
            $table->integer('OffDuty')->nullable();
            $table->integer('DelTag')->nullable();
            $table->integer('morecard_group_id')->nullable();
            $table->boolean('set_valid_time')->nullable();
            $table->dateTime('acc_startdate')->nullable();
            $table->dateTime('acc_enddate')->nullable();
            $table->string('birthplace', 50)->nullable();
            $table->string('Political', 50)->nullable();
            $table->string('contry', 50)->nullable();
            $table->integer('hiretype')->nullable();
            $table->string('email', 50)->nullable();
            $table->dateTime('firedate')->nullable();
            $table->boolean('isatt')->nullable();
            $table->string('homeaddress', 50)->nullable();
            $table->integer('emptype')->nullable();
            $table->string('bankcode1', 50)->nullable();
            $table->string('bankcode2', 50)->nullable();
            $table->integer('isblacklist')->nullable();
            $table->integer('Iuser1')->nullable();
            $table->integer('Iuser2')->nullable();
            $table->integer('Iuser3')->nullable();
            $table->integer('Iuser4')->nullable();
            $table->integer('Iuser5')->nullable();
            $table->string('Cuser1', 50)->nullable();
            $table->string('Cuser2', 50)->nullable();
            $table->string('Cuser3', 50)->nullable();
            $table->string('Cuser4', 50)->nullable();
            $table->string('Cuser5', 50)->nullable();
            $table->dateTime('Duser1')->nullable();
            $table->dateTime('Duser2')->nullable();
            $table->dateTime('Duser3')->nullable();
            $table->dateTime('Duser4')->nullable();
            $table->dateTime('Duser5')->nullable();
            $table->dateTime('OfflineBeginDate')->nullable();
            $table->dateTime('OfflineEndDate')->nullable();
            $table->string('carNo', 50)->nullable();
            $table->string('carType', 50)->nullable();
            $table->string('carBrand', 50)->nullable();
            $table->string('carColor', 50)->nullable();
            $table->integer('ID_GrupoSincronizacion')->nullable();
            $table->integer('Conexion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userinfoBk');
    }
};

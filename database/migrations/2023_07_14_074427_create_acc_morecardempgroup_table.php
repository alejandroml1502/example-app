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
        Schema::create('acc_morecardempgroup', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->default(0);
            $table->string('group_name', 50)->nullable()->unique('UQ__acc_more__E8F4F58D17293332');
            $table->string('memo', 50)->nullable();
            $table->integer('StdGroupNo')->nullable();
            $table->integer('StdGroupTz')->nullable();
            $table->integer('StdGroupVT')->nullable();
            $table->boolean('StdValidOnHoliday')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_morecardempgroup');
    }
};

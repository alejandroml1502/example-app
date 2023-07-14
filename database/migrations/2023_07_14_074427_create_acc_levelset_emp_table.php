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
        Schema::create('acc_levelset_emp', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('acclevelset_id');
            $table->integer('employee_id');

            $table->unique(['acclevelset_id', 'employee_id'], 'UQ__acc_leve__C9BFF5566AFF7AD5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_levelset_emp');
    }
};

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
        Schema::create('acc_firstopen_emp', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('accfirstopen_id')->nullable();
            $table->integer('employee_id')->nullable();

            $table->unique(['accfirstopen_id', 'employee_id'], 'UQ__acc_firs__2300FB96B995596A');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_firstopen_emp');
    }
};

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
        Schema::create('AUTHDEVICE', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('USERID');
            $table->integer('MachineID');

            $table->primary(['USERID', 'MachineID'], 'USERCHECKTIME');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AUTHDEVICE');
    }
};

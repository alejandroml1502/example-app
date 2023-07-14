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
        Schema::create('UsersMachines', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('USERID');
            $table->integer('DEVICEID');

            $table->primary(['USERID', 'DEVICEID'], 'UsersMachinesPK');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UsersMachines');
    }
};

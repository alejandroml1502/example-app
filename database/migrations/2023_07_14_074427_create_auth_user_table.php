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
        Schema::create('auth_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 50)->nullable();
            $table->string('password', 50)->nullable();
            $table->integer('Status')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->integer('RoleID')->nullable();
            $table->text('Remark')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auth_user');
    }
};

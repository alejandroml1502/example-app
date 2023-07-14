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
        Schema::create('auth_permission', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->nullable();
            $table->integer('content_type_id')->nullable();
            $table->string('codename', 50)->nullable();

            $table->unique(['content_type_id', 'codename'], 'UQ__auth_per__0A068CF718AA9BCD');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auth_permission');
    }
};

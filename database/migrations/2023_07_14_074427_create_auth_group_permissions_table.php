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
        Schema::create('auth_group_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id');
            $table->integer('permission_id');

            $table->unique(['group_id', 'permission_id'], 'UQ__auth_gro__6B24A40EC7C1817B');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auth_group_permissions');
    }
};

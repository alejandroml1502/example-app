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
        Schema::create('UserUsedSClasses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('UserId');
            $table->integer('SchId')->nullable();

            $table->unique(['UserId', 'SchId'], 'UQ__UserUsed__BB25543D9BF6A5F7');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UserUsedSClasses');
    }
};

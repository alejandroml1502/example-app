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
        Schema::create('base_option', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->nullable();
            $table->string('name', 50)->nullable();
            $table->string('app_label', 50)->nullable();
            $table->string('catalog', 50)->nullable();
            $table->string('group', 50)->nullable();
            $table->string('widget', 50)->nullable();
            $table->boolean('required')->default(false);
            $table->string('validator', 50)->nullable();
            $table->string('verbose_name', 50)->nullable();
            $table->string('help_text', 50)->nullable();
            $table->boolean('visible')->default(false);
            $table->string('default', 50)->nullable();
            $table->boolean('read_only')->default(false);
            $table->boolean('for_personal')->default(false);
            $table->string('type', 50)->default('CharField');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_option');
    }
};

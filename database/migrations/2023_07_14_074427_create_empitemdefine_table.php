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
        Schema::create('empitemdefine', function (Blueprint $table) {
            $table->string('ItemName', 100)->primary();
            $table->string('ItemType', 50)->nullable();
            $table->integer('Author_id')->nullable();
            $table->string('ItemValue', 50)->nullable();
            $table->smallInteger('Published')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empitemdefine');
    }
};

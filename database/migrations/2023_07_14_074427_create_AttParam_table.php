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
        Schema::create('AttParam', function (Blueprint $table) {
            $table->string('PARANAME', 20)->primary();
            $table->string('PARATYPE', 2)->nullable();
            $table->string('PARAVALUE', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AttParam');
    }
};

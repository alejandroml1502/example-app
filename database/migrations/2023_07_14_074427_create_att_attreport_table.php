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
        Schema::create('att_attreport', function (Blueprint $table) {
            $table->string('ItemName', 50)->primary();
            $table->string('ItemType', 50)->nullable();
            $table->integer('Author_id')->nullable();
            $table->text('ItemValue')->nullable();
            $table->integer('Published')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('att_attreport');
    }
};

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
        Schema::create('ReportField', function (Blueprint $table) {
            $table->integer('CRId');
            $table->string('TableName', 50);
            $table->string('FieldName', 50);
            $table->integer('ShowIndex');

            $table->primary(['CRId', 'TableName', 'FieldName'], 'PK_ReportField');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ReportField');
    }
};

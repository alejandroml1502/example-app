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
        Schema::create('BioTemplate', function (Blueprint $table) {
            $table->integer('UserID');
            $table->string('BadgeNumber', 24);
            $table->string('CreateOperator', 30)->nullable();
            $table->dateTime('CreateTime')->nullable();
            $table->string('ValidFlag', 1);
            $table->string('IsDuress', 1);
            $table->integer('BioType');
            $table->string('Version', 20);
            $table->integer('DataFormat')->nullable();
            $table->integer('TemplateNO');
            $table->integer('TemplateNOIndex');
            $table->integer('nOldType')->nullable();
            $table->text('TemplateData')->nullable();
            $table->increments('ID');

            $table->primary(['ID'], 'PK_BioTemplate');
            $table->unique(['BadgeNumber', 'TemplateNOIndex', 'TemplateNO', 'BioType', 'Version'], 'IX_BioTemplate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BioTemplate');
    }
};

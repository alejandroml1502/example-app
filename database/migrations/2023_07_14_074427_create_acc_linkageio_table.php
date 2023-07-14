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
        Schema::create('acc_linkageio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->string('delete_time', 50)->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->string('linkage_name', 50)->nullable()->unique('UQ__acc_link__68BC67822D310326');
            $table->integer('device_id')->nullable();
            $table->integer('trigger_opt')->nullable()->default(0);
            $table->integer('in_address_hide')->nullable();
            $table->integer('in_address')->nullable()->default(0);
            $table->integer('out_type_hide')->nullable();
            $table->integer('out_address_hide')->nullable();
            $table->integer('out_address')->nullable();
            $table->integer('action_type')->nullable();
            $table->integer('delay_time')->nullable()->default(0);
            $table->integer('video_linkageio_id')->nullable()->default(20);
            $table->integer('lchannel_num')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acc_linkageio');
    }
};

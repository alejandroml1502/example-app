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
        Schema::create('personnel_leavelog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('change_operator', 50)->nullable();
            $table->dateTime('change_time')->nullable();
            $table->string('create_operator', 50)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->string('delete_operator', 50)->nullable();
            $table->dateTime('delete_time')->nullable();
            $table->integer('status')->nullable();
            $table->integer('UserID_id')->nullable();
            $table->dateTime('leavedate')->nullable();
            $table->integer('leavetype')->nullable();
            $table->string('reason', 50)->nullable();
            $table->boolean('isReturnTools')->default(false);
            $table->boolean('isReturnClothes')->default(false);
            $table->boolean('isReturnCard')->default(false);
            $table->boolean('isClassAtt')->default(false);
            $table->boolean('isClassAccess')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnel_leavelog');
    }
};

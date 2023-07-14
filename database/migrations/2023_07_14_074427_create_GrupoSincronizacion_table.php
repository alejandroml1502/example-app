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
        Schema::create('GrupoSincronizacion', function (Blueprint $table) {
            $table->increments('ID_GrupoSincronizacion');
            $table->integer('ID_Conexion')->nullable();
            $table->integer('ID_Grupo')->nullable();
            $table->integer('ID_Dispositivo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('GrupoSincronizacion');
    }
};

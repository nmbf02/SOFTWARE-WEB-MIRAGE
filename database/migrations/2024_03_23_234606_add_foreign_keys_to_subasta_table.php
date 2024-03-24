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
        Schema::table('subasta', function (Blueprint $table) {
            $table->foreign(['IdEstadoSubasta'], 'FK_Subasta_EstadoSubasta')->references(['IdEstadoSubasta'])->on('estadosubasta')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdVehiculo'], 'FK_Subasta_Vehiculo')->references(['IdVehiculo'])->on('vehiculos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subasta', function (Blueprint $table) {
            $table->dropForeign('FK_Subasta_EstadoSubasta');
            $table->dropForeign('FK_Subasta_Vehiculo');
        });
    }
};

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
        Schema::table('historialsubasta', function (Blueprint $table) {
            $table->foreign(['IdSubasta'], 'FK_HistorialSubasta_Subasta')->references(['IdSubasta'])->on('subasta')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdVehiculo'], 'FK_HistorialSubasta_Vehiculo')->references(['IdVehiculo'])->on('vehiculos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('historialsubasta', function (Blueprint $table) {
            $table->dropForeign('FK_HistorialSubasta_Subasta');
            $table->dropForeign('FK_HistorialSubasta_Vehiculo');
        });
    }
};

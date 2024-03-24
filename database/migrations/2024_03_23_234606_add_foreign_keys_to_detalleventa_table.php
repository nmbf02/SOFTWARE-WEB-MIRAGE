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
        Schema::table('detalleventa', function (Blueprint $table) {
            $table->foreign(['IdVehiculo'], 'FK_DetalleVenta_Vehiculos')->references(['IdVehiculo'])->on('vehiculos')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdVenta'], 'FK_DetalleVenta_Venta')->references(['IdVenta'])->on('venta')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalleventa', function (Blueprint $table) {
            $table->dropForeign('FK_DetalleVenta_Vehiculos');
            $table->dropForeign('FK_DetalleVenta_Venta');
        });
    }
};

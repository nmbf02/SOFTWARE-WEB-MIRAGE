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
        Schema::table('abonoprestamovehiculos', function (Blueprint $table) {
            $table->foreign(['IdPorcentajeMora'], 'FK_AbonoPrestamoVehiculo_PorcentajeMora')->references(['IDPorcentajeMora'])->on('porcentajemora')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoAbonoPrestamo'], 'FK_AbonoPrestamoVehiculo_TipoAbonoPrestamo')->references(['IdTipoAbonoPrestamo'])->on('tipoabonoprestamo')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdVenta'], 'FK_AbonoPrestamoVehiculo_Venta')->references(['IdVenta'])->on('venta')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abonoprestamovehiculos', function (Blueprint $table) {
            $table->dropForeign('FK_AbonoPrestamoVehiculo_PorcentajeMora');
            $table->dropForeign('FK_AbonoPrestamoVehiculo_TipoAbonoPrestamo');
            $table->dropForeign('FK_AbonoPrestamoVehiculo_Venta');
        });
    }
};

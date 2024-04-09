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
        Schema::table('venta', function (Blueprint $table) {
            $table->foreign(['IdCliente'], 'FK_Venta_Clientes')->references(['IdCliente'])->on('clientes')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdCotizacion'], 'FK_Venta_CotizacionVEnta')->references(['IdCotizacion'])->on('cotizacionventa')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdMoneda'], 'FK_Venta_Moneda')->references(['IdMoneda'])->on('moneda')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdSolicitudPrestamoVehiculo'], 'FK_Venta_SolicitudPrestamoVehiculos')->references(['IdSolicitudPrestamoVehiculo'])->on('solicitudprestamovehiculos')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdUsuario'], 'FK_Venta_Usuario')->references(['IdUsuario'])->on('usuario')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('venta', function (Blueprint $table) {
            $table->dropForeign('FK_Venta_Clientes');
            $table->dropForeign('FK_Venta_CotizacionVEnta');
            $table->dropForeign('FK_Venta_Moneda');
            $table->dropForeign('FK_Venta_SolicitudPrestamoVehiculos');
            $table->dropForeign('FK_Venta_Usuario');
        });
    }
};

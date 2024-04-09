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
        Schema::table('cotizacionventa', function (Blueprint $table) {
            $table->foreign(['IdCliente'], 'FK_CotizacionVehiculos_Cliente')->references(['IdCliente'])->on('clientes')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdEstadoCotizacion'], 'FK_CotizacionVehiculos_EstadoCotizacion')->references(['IdEstadoCotizacion'])->on('estadocotizacion')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoCotizacion'], 'FK_CotizacionVehiculos_TipoCotizacion')->references(['IdTipoCotizacion'])->on('tipocotizacionesvehiculos')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdUsuario'], 'FK_CotizacionVehiculos_Usuario')->references(['IdUsuario'])->on('usuario')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cotizacionventa', function (Blueprint $table) {
            $table->dropForeign('FK_CotizacionVehiculos_Cliente');
            $table->dropForeign('FK_CotizacionVehiculos_EstadoCotizacion');
            $table->dropForeign('FK_CotizacionVehiculos_TipoCotizacion');
            $table->dropForeign('FK_CotizacionVehiculos_Usuario');
        });
    }
};

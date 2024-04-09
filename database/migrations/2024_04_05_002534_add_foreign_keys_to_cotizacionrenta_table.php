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
        Schema::table('cotizacionrenta', function (Blueprint $table) {
            $table->foreign(['IdCliente'], 'FK_CotizacionRenta_Clientes')->references(['IdCliente'])->on('clientes')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdEstadoCotizacionRenta'], 'FK_CotizacionRenta_EstadoCotizacionRenta')->references(['IdEstadoCotizacionRenta'])->on('estadocotizacionrenta')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoCotizacionRenta'], 'FK_CotizacionRenta_TipoCotizacionRenta')->references(['IdTipoCotizacionRenta'])->on('tipocotizacionrenta')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdUsuario'], 'FK_CotizacionRenta_Usuario')->references(['IdUsuario'])->on('usuario')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cotizacionrenta', function (Blueprint $table) {
            $table->dropForeign('FK_CotizacionRenta_Clientes');
            $table->dropForeign('FK_CotizacionRenta_EstadoCotizacionRenta');
            $table->dropForeign('FK_CotizacionRenta_TipoCotizacionRenta');
            $table->dropForeign('FK_CotizacionRenta_Usuario');
        });
    }
};

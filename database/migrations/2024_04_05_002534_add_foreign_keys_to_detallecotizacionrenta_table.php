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
        Schema::table('detallecotizacionrenta', function (Blueprint $table) {
            $table->foreign(['IdCliente'], 'FK_DetalleCotizacionRenta_Clientes')->references(['IdCliente'])->on('clientes')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdCotizacionRenta'], 'FK_DetalleCotizacionRenta_CotizacionRenta')->references(['IdCotizacionRenta'])->on('cotizacionrenta')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdVehiculo'], 'FK_DetalleCotizacionRenta_Vehiculos')->references(['IdVehiculo'])->on('vehiculos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detallecotizacionrenta', function (Blueprint $table) {
            $table->dropForeign('FK_DetalleCotizacionRenta_Clientes');
            $table->dropForeign('FK_DetalleCotizacionRenta_CotizacionRenta');
            $table->dropForeign('FK_DetalleCotizacionRenta_Vehiculos');
        });
    }
};

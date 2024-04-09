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
        Schema::table('detallecotizacion', function (Blueprint $table) {
            $table->foreign(['IdCotizacion'], 'FK_DetalleCotizacion_CotizacionVehiculos')->references(['IdCotizacion'])->on('cotizacionventa')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdVehiculo'], 'FK_DetalleCotizacion_Vehiculos')->references(['IdVehiculo'])->on('vehiculos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detallecotizacion', function (Blueprint $table) {
            $table->dropForeign('FK_DetalleCotizacion_CotizacionVehiculos');
            $table->dropForeign('FK_DetalleCotizacion_Vehiculos');
        });
    }
};

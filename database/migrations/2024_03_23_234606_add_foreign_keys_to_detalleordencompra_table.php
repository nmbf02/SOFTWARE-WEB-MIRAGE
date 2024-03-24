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
        Schema::table('detalleordencompra', function (Blueprint $table) {
            $table->foreign(['IdOrdenCompra'], 'FK_DetalleOrdenCompra_OrdenCompra')->references(['IdOrdenCompra'])->on('ordencompra')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdVehiculo'], 'FK_DetalleOrdenCompra_Vehiculo')->references(['IdVehiculo'])->on('vehiculos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalleordencompra', function (Blueprint $table) {
            $table->dropForeign('FK_DetalleOrdenCompra_OrdenCompra');
            $table->dropForeign('FK_DetalleOrdenCompra_Vehiculo');
        });
    }
};

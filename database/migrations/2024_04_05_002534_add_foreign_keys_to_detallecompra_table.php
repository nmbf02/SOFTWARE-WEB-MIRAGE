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
        Schema::table('detallecompra', function (Blueprint $table) {
            $table->foreign(['IdCompra'], 'FK_DetalleCompra_Compra')->references(['IdCompra'])->on('compra')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdVehiculo'], 'FK_DetalleCompra_Vehiculo')->references(['IdVehiculo'])->on('vehiculos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detallecompra', function (Blueprint $table) {
            $table->dropForeign('FK_DetalleCompra_Compra');
            $table->dropForeign('FK_DetalleCompra_Vehiculo');
        });
    }
};

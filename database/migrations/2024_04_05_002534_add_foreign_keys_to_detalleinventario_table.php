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
        Schema::table('detalleinventario', function (Blueprint $table) {
            $table->foreign(['IdInventario'], 'FK_DetalleInventario_Inventario')->references(['IdInventario'])->on('inventario')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdVehiculo'], 'FK_DetalleInventario_Vehiculo')->references(['IdVehiculo'])->on('vehiculos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalleinventario', function (Blueprint $table) {
            $table->dropForeign('FK_DetalleInventario_Inventario');
            $table->dropForeign('FK_DetalleInventario_Vehiculo');
        });
    }
};

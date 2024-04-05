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
        Schema::table('detallerentavehiculo', function (Blueprint $table) {
            $table->foreign(['IdRentaVehiculo'], 'FK_DetalleRentaVehiculo_RentaVehiculo')->references(['IdRentaVehiculo'])->on('rentavehiculo')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdVehiculo'], 'FK_DetalleRentaVehiculo_Vehiculo')->references(['IdVehiculo'])->on('vehiculos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detallerentavehiculo', function (Blueprint $table) {
            $table->dropForeign('FK_DetalleRentaVehiculo_RentaVehiculo');
            $table->dropForeign('FK_DetalleRentaVehiculo_Vehiculo');
        });
    }
};

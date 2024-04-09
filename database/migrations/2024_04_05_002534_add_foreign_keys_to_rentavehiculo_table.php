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
        Schema::table('rentavehiculo', function (Blueprint $table) {
            $table->foreign(['IdCliente'], 'FK_RentaVehiculo_Cliente')->references(['IdCliente'])->on('clientes')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdCotizacionRenta'], 'FK_RentaVehiculo_CotizacionRenta')->references(['IdCotizacionRenta'])->on('cotizacionrenta')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdEstadoRenta'], 'FK_RentaVehiculo_EstadoRenta')->references(['IdEstadoRenta'])->on('estadorenta')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdFormaPago'], 'FK_RentaVehiculo_FormaPago')->references(['IdFormaPago'])->on('formapago')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdUsuario'], 'FK_RentaVehiculo_Usuario')->references(['IdUsuario'])->on('usuario')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rentavehiculo', function (Blueprint $table) {
            $table->dropForeign('FK_RentaVehiculo_Cliente');
            $table->dropForeign('FK_RentaVehiculo_CotizacionRenta');
            $table->dropForeign('FK_RentaVehiculo_EstadoRenta');
            $table->dropForeign('FK_RentaVehiculo_FormaPago');
            $table->dropForeign('FK_RentaVehiculo_Usuario');
        });
    }
};

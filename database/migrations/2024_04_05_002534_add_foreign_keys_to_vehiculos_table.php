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
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->foreign(['IdClasificacionVehiculo'], 'FK_Vehiculos_ClasificacionVehiculo')->references(['IdClasificacionVehiculo'])->on('clasificacionvehiculos')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdColorVehiculo'], 'FK_Vehiculos_ColorVehiculo')->references(['IdColorVehiculo'])->on('colorvehiculos')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdEstadoVehiculo'], 'FK_Vehiculos_EstadoVehiculo')->references(['IdEstadoVehiculo'])->on('estadovehiculos')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdGarantia'], 'FK_Vehiculos_Garantia')->references(['IdGarantia'])->on('garantia')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdModeloVehiculo'], 'FK_Vehiculos_ModeloVehiculo')->references(['IdModeloVehiculo'])->on('modelovehiculos')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdSegmentoMercado'], 'FK_Vehiculos_SegmentoMercadoVehiculo')->references(['IdSegmentoMercado'])->on('segmentomercado')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdSeguroVehiculo'], 'FK_Vehiculos_SeguroVehiculo')->references(['IdSeguroVehiculo'])->on('segurovehiculos')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoItbis'], 'FK_Vehiculos_TipoItbis')->references(['IdTipoItbis'])->on('tipoitbis')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoVehiculo'], 'FK_Vehiculos_TipoVehiculo')->references(['IdTipoVehiculo'])->on('tipovehiculos')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoVehiculoConcesionario'], 'FK_Vehiculos_TipoVehiculoConcesionario')->references(['IdTipoVehiculoConcesionario'])->on('tipovehiculoconcesionario')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTraccionVehiculo'], 'FK_Vehiculos_TraccionVehiculo')->references(['IdTraccionVehiculo'])->on('traccionvehiculos')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTransmisionVehiculo'], 'FK_Vehiculos_TransmisionVehiculo')->references(['IdTransmisionVehiculo'])->on('transmisionvehiculos')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdUbicacion'], 'FK_Vehiculos_Ubicacion')->references(['IdUbicacion'])->on('ubicacion')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->dropForeign('FK_Vehiculos_ClasificacionVehiculo');
            $table->dropForeign('FK_Vehiculos_ColorVehiculo');
            $table->dropForeign('FK_Vehiculos_EstadoVehiculo');
            $table->dropForeign('FK_Vehiculos_Garantia');
            $table->dropForeign('FK_Vehiculos_ModeloVehiculo');
            $table->dropForeign('FK_Vehiculos_SegmentoMercadoVehiculo');
            $table->dropForeign('FK_Vehiculos_SeguroVehiculo');
            $table->dropForeign('FK_Vehiculos_TipoItbis');
            $table->dropForeign('FK_Vehiculos_TipoVehiculo');
            $table->dropForeign('FK_Vehiculos_TipoVehiculoConcesionario');
            $table->dropForeign('FK_Vehiculos_TraccionVehiculo');
            $table->dropForeign('FK_Vehiculos_TransmisionVehiculo');
            $table->dropForeign('FK_Vehiculos_Ubicacion');
        });
    }
};

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
        Schema::table('ordenreparacion', function (Blueprint $table) {
            $table->foreign(['IdEmpleado'], 'FK_OrdenReparacion_Empleados')->references(['IdEmpleado'])->on('empleados')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdEstadoOrden'], 'FK_OrdenReparacion_EstadoOrdenReparacion')->references(['IdEstadoOrdenReparacion'])->on('estadoordenreparacion')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdSuplidor'], 'FK_OrdenReparacion_Suplidor')->references(['IdSuplidor'])->on('suplidor')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoMotivoOrdenReparacion'], 'FK_OrdenReparacion_TipoMotivoOrdenReparacion')->references(['IdTipoMotivoOrdenReparacion'])->on('tipomotivoordenreparacion')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdVehiculo'], 'FK_OrdenReparacion_Vehiculos')->references(['IdVehiculo'])->on('vehiculos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ordenreparacion', function (Blueprint $table) {
            $table->dropForeign('FK_OrdenReparacion_Empleados');
            $table->dropForeign('FK_OrdenReparacion_EstadoOrdenReparacion');
            $table->dropForeign('FK_OrdenReparacion_Suplidor');
            $table->dropForeign('FK_OrdenReparacion_TipoMotivoOrdenReparacion');
            $table->dropForeign('FK_OrdenReparacion_Vehiculos');
        });
    }
};

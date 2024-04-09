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
        Schema::table('mantenimientovehiculos', function (Blueprint $table) {
            $table->foreign(['IdMoneda'], 'FK_MantenimientoVehiculos_Moneda')->references(['IdMoneda'])->on('moneda')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdOrdenReparacion'], 'FK_MantenimientoVehiculos_OrdenReparacion')->references(['IdOrdenReparacion'])->on('ordenreparacion')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoMantenimiento'], 'FK_MantenimientoVehiculos_TipoMantenimiento')->references(['IdTipoMantenimiento'])->on('tipomantenimiento')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mantenimientovehiculos', function (Blueprint $table) {
            $table->dropForeign('FK_MantenimientoVehiculos_Moneda');
            $table->dropForeign('FK_MantenimientoVehiculos_OrdenReparacion');
            $table->dropForeign('FK_MantenimientoVehiculos_TipoMantenimiento');
        });
    }
};

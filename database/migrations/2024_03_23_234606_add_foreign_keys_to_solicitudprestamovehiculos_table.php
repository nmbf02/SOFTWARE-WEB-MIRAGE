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
        Schema::table('solicitudprestamovehiculos', function (Blueprint $table) {
            $table->foreign(['IdCliente'], 'FK_SolicitudPrestamoVehiculos_Cliente')->references(['IdCliente'])->on('clientes')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoPrestamo'], 'FK_SolicitudPrestamoVehiculos_TipoPrestamo')->references(['IdTipoPrestamo'])->on('tipoprestamo')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicitudprestamovehiculos', function (Blueprint $table) {
            $table->dropForeign('FK_SolicitudPrestamoVehiculos_Cliente');
            $table->dropForeign('FK_SolicitudPrestamoVehiculos_TipoPrestamo');
        });
    }
};

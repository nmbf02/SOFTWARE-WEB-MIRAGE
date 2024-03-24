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
        Schema::table('retroalimentacionempleado', function (Blueprint $table) {
            $table->foreign(['IdCanalComunicacion'], 'FK_RetroalimentacionEmpleado_CanalComunicacion')->references(['IdCanalComunicacion'])->on('canalcomunicacion')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdEmpleado'], 'FK_RetroalimentacionEmpleado_Empleado')->references(['IdEmpleado'])->on('empleados')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdMovimientoRetroalimentacion'], 'FK_RetroalimentacionEmpleado_MovimientoRetroalimentacion')->references(['IdMovimientoRetroalimentacion'])->on('tipomovimientoretroalimentacion')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdPrioridadComunicacion'], 'FK_RetroalimentacionEmpleado_PrioridadComunicacion')->references(['IdPrioridadComunicacion'])->on('prioridadcomunicacion')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdRetroalimentacionCliente'], 'FK_RetroalimentacionEmpleado_RetroalimentacionCliente')->references(['IdRetroalimentacionCliente'])->on('retroalimentacioncliente')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('retroalimentacionempleado', function (Blueprint $table) {
            $table->dropForeign('FK_RetroalimentacionEmpleado_CanalComunicacion');
            $table->dropForeign('FK_RetroalimentacionEmpleado_Empleado');
            $table->dropForeign('FK_RetroalimentacionEmpleado_MovimientoRetroalimentacion');
            $table->dropForeign('FK_RetroalimentacionEmpleado_PrioridadComunicacion');
            $table->dropForeign('FK_RetroalimentacionEmpleado_RetroalimentacionCliente');
        });
    }
};

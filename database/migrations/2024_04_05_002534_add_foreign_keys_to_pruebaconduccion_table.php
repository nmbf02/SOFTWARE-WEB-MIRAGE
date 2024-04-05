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
        Schema::table('pruebaconduccion', function (Blueprint $table) {
            $table->foreign(['IdEmpleado'], 'FK_PruebaConduccion_Empleado')->references(['IdEmpleado'])->on('empleados')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdSolicitudCita'], 'FK_PruebaConduccion_SolicitudCita')->references(['IdSolicitudCita'])->on('solicitudcita')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pruebaconduccion', function (Blueprint $table) {
            $table->dropForeign('FK_PruebaConduccion_Empleado');
            $table->dropForeign('FK_PruebaConduccion_SolicitudCita');
        });
    }
};

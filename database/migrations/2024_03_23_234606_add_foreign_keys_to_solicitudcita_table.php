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
        Schema::table('solicitudcita', function (Blueprint $table) {
            $table->foreign(['IdCliente'], 'FK_SolicitudCita_Cliente')->references(['IdCliente'])->on('clientes')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdEstadoSolicitud'], 'FK_SolicitudCita_EstadoSolicitud')->references(['IdEstadoSolicitud'])->on('estadosolicitud')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdUsuario'], 'FK_SolicitudCita_Usuario')->references(['IdUsuario'])->on('usuario')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdVehiculo'], 'FK_SolicitudCita_Vehiculo')->references(['IdVehiculo'])->on('vehiculos')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdViaSolicitud'], 'FK_SolicitudCita_ViaSolicitud')->references(['IdViaSolicitud'])->on('viasolicitud')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicitudcita', function (Blueprint $table) {
            $table->dropForeign('FK_SolicitudCita_Cliente');
            $table->dropForeign('FK_SolicitudCita_EstadoSolicitud');
            $table->dropForeign('FK_SolicitudCita_Usuario');
            $table->dropForeign('FK_SolicitudCita_Vehiculo');
            $table->dropForeign('FK_SolicitudCita_ViaSolicitud');
        });
    }
};

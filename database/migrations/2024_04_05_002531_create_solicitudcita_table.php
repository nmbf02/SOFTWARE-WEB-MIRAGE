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
        Schema::create('solicitudcita', function (Blueprint $table) {
            $table->integer('IdSolicitudCita', true)->comment('Identificador único para cada solicitud de cita en el sistema.');
            $table->integer('IdCliente')->index('fk_solicitudcita_cliente')->comment('Clave foránea que referencia al cliente que realiza la solicitud. Se vincula con la tabla de clientes para obtener detalles como nombre, contacto, etc.');
            $table->integer('IdVehiculo')->index('fk_solicitudcita_vehiculo')->comment('Clave foránea opcional que referencia al vehículo asociado con la solicitud de cita, si aplica.');
            $table->date('Fecha')->comment('Fecha (y posiblemente hora) para la cual se solicita la cita.');
            $table->integer('IdUsuario')->index('fk_solicitudcita_usuario')->comment('Clave foránea que referencia al usuario (puede ser un empleado o un sistema automatizado) que registra la solicitud de cita.');
            $table->text('Observacion')->comment('Campo opcional para añadir observaciones o requisitos específicos relacionados con la solicitud de cita.');
            $table->integer('IdEstadoSolicitud')->index('fk_solicitudcita_estadosolicitud')->comment('Clave foránea que referencia al estado actual de la solicitud de cita (por ejemplo, pendiente, confirmada, cancelada).');
            $table->integer('IdViaSolicitud')->index('fk_solicitudcita_viasolicitud')->comment('Clave foránea que indica la vía por la cual se realizó la solicitud (por ejemplo, en línea, por teléfono, en persona).');
            $table->boolean('Status')->default(false)->comment('Indica si la solicitud de cita está activa (1) o inactiva (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudcita');
    }
};

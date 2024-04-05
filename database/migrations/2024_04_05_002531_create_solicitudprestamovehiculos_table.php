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
        Schema::create('solicitudprestamovehiculos', function (Blueprint $table) {
            $table->integer('IdSolicitudPrestamoVehiculo', true)->comment('Identificador único para cada solicitud de préstamo de vehículos en el sistema.');
            $table->integer('IdTipoPrestamo')->index('fk_solicitudprestamovehiculos_tipoprestamo')->comment('Clave foránea que referencia al tipo de préstamo solicitado. ');
            $table->integer('IdCliente')->index('fk_solicitudprestamovehiculos_cliente')->comment('Clave foránea que referencia al cliente que realiza la solicitud.');
            $table->integer('IdVehiculo')->index('fk_solicitudprestamovehiculos_vehiculo')->comment('Clave foránea que referencia al vehículo para el cual se solicita el préstamo. ');
            $table->decimal('MontoSolicitado', 18)->comment('Monto total solicitado en el préstamo para la compra del vehículo.');
            $table->date('FechaSolicitud')->comment('Fecha en la que se realiza la solicitud de préstamo.');
            $table->date('FechaAprobacion')->nullable()->comment('Fecha en la que la solicitud de préstamo es aprobada. ');
            $table->integer('Plazo')->comment(' Número de meses o el plazo durante el cual se debe pagar el préstamo.');
            $table->integer('IdLapsoTiempo')->index('fk_solicitudprestamovehiculos_lapsotiempo');
            $table->boolean('Status')->default(false)->comment('Indica si la solicitud de préstamo está activa (1) o ha sido cerrada (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudprestamovehiculos');
    }
};

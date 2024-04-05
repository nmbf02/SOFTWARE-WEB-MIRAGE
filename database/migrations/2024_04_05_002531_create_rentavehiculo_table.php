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
        Schema::create('rentavehiculo', function (Blueprint $table) {
            $table->integer('IdRentaVehiculo', true)->comment('Identificador único para cada contrato de renta de vehículo.');
            $table->integer('IdCotizacionRenta')->nullable()->index('fk_rentavehiculo_cotizacionrenta')->comment('Clave foránea que referencia la cotización que hace referencia al vehículo.');
            $table->integer('IdCliente')->index('fk_rentavehiculo_cliente')->comment('Clave foránea que referencia al cliente que renta el vehículo. Identifica al cliente en la base de datos.');
            $table->dateTime('Fecha');
            $table->integer('CantidadDias');
            $table->integer('IdLapsoTiempo')->index('fk_rentavehiculo_lapsotiempo');
            $table->date('FechaInicio')->comment('Fecha en la que comienza el período de renta.');
            $table->date('FechaFin')->comment('Fecha en la que termina el período de renta.');
            $table->decimal('Descuento', 18)->nullable();
            $table->decimal('PrecioTotal', 18)->comment('Costo total de la renta para el período especificado.');
            $table->date('ValidoHasta');
            $table->integer('IdFormaPago')->index('fk_rentavehiculo_formapago')->comment('Clave foránea que referencia la forma de pago utilizada por el cliente para la renta.');
            $table->integer('IdEstadoRenta')->index('fk_rentavehiculo_estadorenta')->comment('Clave foránea que referencia al estado actual de la renta (por ejemplo, activa, finalizada, cancelada).');
            $table->integer('IdUsuario')->index('fk_rentavehiculo_usuario');
            $table->boolean('Status')->default(false)->comment(' Indica si el contrato de renta está activo (1) o no (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentavehiculo');
    }
};

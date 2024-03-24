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
        Schema::create('detallecotizacionrenta', function (Blueprint $table) {
            $table->integer('IdCotizacionRenta')->index('fk_detallecotizacionrenta_cotizacionrenta')->comment('Clave foránea que referencia al registro de la cotización de renta principal. Identifica a qué cotización de renta pertenece cada detalle.');
            $table->integer('IdCliente')->index('fk_detallecotizacionrenta_clientes')->comment('Clave foránea que referencia al Cliente  específico que se está cotizando para renta. ');
            $table->integer('IdVehiculo')->index('fk_detallecotizacionrenta_vehiculos')->comment('Clave foránea que referencia al vehículo específico que se está cotizando para renta.');
            $table->date('FechaCotizacion')->comment('Fecha en la que se realizó la cotización. Aunque este dato suele estar en la cotización principal, podría ser útil repetirlo aquí para registros detallados.');
            $table->decimal('PrecioRenta', 18)->comment('El precio sugerido de renta del vehículo. ');
            $table->decimal('PrecioRentaDiaria', 18)->comment('El costo diario de renta del vehículo especificado.');
            $table->integer('DiasRenta')->comment('La cantidad de días que el vehículo será rentado según la cotización.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallecotizacionrenta');
    }
};

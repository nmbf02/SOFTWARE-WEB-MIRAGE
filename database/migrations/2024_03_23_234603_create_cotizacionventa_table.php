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
        Schema::create('cotizacionventa', function (Blueprint $table) {
            $table->integer('IdCotizacion', true)->comment('Identificador único para cada cotización de venta de vehículos.');
            $table->integer('IdTipoCotizacion')->index('fk_cotizacionvehiculos_tipocotizacion')->comment('Clave foránea que especifica el tipo de cotización de venta');
            $table->integer('IdCliente')->index('fk_cotizacionvehiculos_cliente')->comment('Clave foránea que referencia al cliente al que se le hace la cotización.');
            $table->integer('IdUsuario')->index('fk_cotizacionvehiculos_usuario')->comment('Clave foránea que referencia al usuario que creó la cotización.');
            $table->date('FechaCotizacion')->comment('Fecha en que se realiza la cotización.');
            $table->decimal('DescuentoTotal', 18)->comment('Total de descuento aplicado a la cotización.');
            $table->decimal('PrecioFinal', 18)->comment('Precio final de la cotización después de aplicar descuentos.');
            $table->integer('IdEstadoCotizacion')->index('fk_cotizacionvehiculos_estadocotizacion')->comment('Clave foránea que indica el estado de la cotización (e.g., pendiente, aprobada, rechazada).');
            $table->date('ValidaHasta')->comment('Fecha hasta la cual la cotización es válida.');
            $table->boolean('Status')->default(false)->comment('Indica si la cotización está activa (1) o inactiva (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizacionventa');
    }
};

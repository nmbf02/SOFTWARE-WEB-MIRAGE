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
        Schema::create('venta', function (Blueprint $table) {
            $table->integer('IdVenta', true)->comment('Identificador único para cada transacción de venta. Sirve como clave primaria de la tabla.');
            $table->integer('IdCliente')->index('fk_venta_clientes')->comment('Clave foránea que referencia al cliente que realiza la compra. Este campo vincula la venta con un registro específico del cliente en la base de datos.');
            $table->date('Fecha')->comment('Fecha en la que se realizó la venta.');
            $table->decimal('Subtotal', 18)->comment('Monto total de la venta antes de aplicar descuentos o impuestos.');
            $table->decimal('Descuento', 18)->nullable()->comment('Monto del descuento aplicado a la venta, si lo hay. Este campo reduce el subtotal antes del cálculo de impuestos y total final.');
            $table->decimal('Total', 18)->comment('Monto final de la venta después de aplicar descuentos e impuestos. Representa el monto total pagado por el cliente.');
            $table->integer('IdMoneda')->index('fk_venta_moneda')->comment('Clave foránea que referencia a la tabla Moneda, indicando la moneda en que se expresan los montos de la venta.');
            $table->integer('IdUsuario')->index('fk_venta_usuario')->comment('Clave foránea que referencia al usuario o empleado que realizó la venta.');
            $table->integer('IdCotizacion')->nullable()->index('fk_venta_cotizacionventa')->comment('Clave foránea opcional que vincula la venta con una cotización previa, si la venta se originó a partir de una cotización específica.');
            $table->integer('IdSolicitudPrestamoVehiculo')->nullable()->index('fk_venta_solicitudprestamovehiculos')->comment('Clave foránea opcional que vincula la venta con una solicitud de préstamo para vehículos, si aplica.');
            $table->boolean('Status')->default(false)->comment('Indica si la transacción de venta está activa (1) o ha sido anulada (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
};

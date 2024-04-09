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
        Schema::create('detallecompra', function (Blueprint $table) {
            $table->integer('IdCompra')->index('fk_detallecompra_compras')->comment('Clave foránea que referencia al registro de compra en la tabla Compra. Indica a qué compra pertenece cada detalle.');
            $table->integer('IdVehiculo')->index('fk_detallecompra_vehiculo')->comment(' Clave foránea que referencia al vehículo comprado, enlazado con la tabla Vehiculos. Esto permite identificar qué vehículos específicos fueron adquiridos en la compra.');
            $table->integer('CantidadComprada')->comment('La cantidad de unidades del vehículo compradas en esta transacción.');
            $table->decimal('PrecioUnitario', 18)->comment(' El precio de compra por unidad del vehículo.');
            $table->decimal('Subtotal', 18)->comment('El costo total de las unidades compradas de este vehículo, antes de aplicar cualquier descuento o impuesto.');
            $table->decimal('Descuento', 18)->nullable()->comment('El descuento aplicado sobre el subtotal de este vehículo específico.');
            $table->decimal('Impuesto', 18)->comment('El impuesto aplicado sobre el subtotal de este vehículo específico.');
            $table->boolean('Status')->default(false)->comment('Indica si el detalle de la compra está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallecompra');
    }
};

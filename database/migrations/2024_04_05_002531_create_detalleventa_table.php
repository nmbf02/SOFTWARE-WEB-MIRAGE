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
        Schema::create('detalleventa', function (Blueprint $table) {
            $table->integer('IdVenta')->index('fk_detalleventa_venta')->comment('Clave foránea que referencia al registro principal de la venta. Identifica a qué venta pertenece cada detalle.');
            $table->integer('IdVehiculo')->index('fk_detalleventa_vehiculos')->comment('Clave foránea que referencia al vehículo específico que se está vendiendo. Permite detallar qué vehículos están incluidos en la venta.');
            $table->integer('CantidadVendida')->comment('La cantidad del vehículo específico vendido en esta transacción.');
            $table->decimal('PrecioUnitario', 18)->comment('El precio de venta por unidad del vehículo.');
            $table->decimal('Subtotal', 18)->comment(' El costo total para esta línea de la venta, generalmente calculado como CantidadVendida * PrecioUnitario.');
            $table->decimal('Descuento', 18)->comment('El descuento aplicado sobre el subtotal de este vehículo específico.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleventa');
    }
};

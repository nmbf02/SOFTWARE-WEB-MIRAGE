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
        Schema::create('detalleordencompra', function (Blueprint $table) {
            $table->integer('IdOrdenCompra')->index('fk_detalleordencompra_ordencompra')->comment('Clave foránea que referencia al registro principal de la orden de compra. Identifica a qué orden de compra pertenece cada detalle.');
            $table->integer('IdVehiculo')->index('fk_detalleordencompra_vehiculo')->comment('Clave foránea que referencia al vehículo específico que se está ordenando. En el contexto de otros negocios, este campo podría referirse a productos o servicios específicos.');
            $table->integer('CantidadOrdenada')->comment('La cantidad del producto o servicio solicitado en esta parte de la orden de compra.');
            $table->decimal('PrecioUnitario', 18)->comment('El precio por unidad del producto o servicio solicitado.');
            $table->decimal('Subtotal', 18)->comment('El costo total para esta línea de la orden de compra, generalmente calculado como CantidadOrdenada * PrecioUnitario.');
            $table->decimal('ImpuestoProducto', 18)->comment(' El impuesto aplicado a este producto o servicio específico, si aplica.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleordencompra');
    }
};

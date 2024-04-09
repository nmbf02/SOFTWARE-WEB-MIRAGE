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
        Schema::create('detallecotizacion', function (Blueprint $table) {
            $table->integer('IdCotizacion')->index('fk_detallecotizacion_cotizacionvehiculos')->comment('Clave foránea que referencia al registro principal de la cotización. Identifica a qué cotización pertenece cada detalle.');
            $table->integer('IdVehiculo')->index('fk_detallecotizacion_vehiculo');
            $table->integer('CantidadCotizada')->comment('La cantidad del producto o servicio que se está cotizando.');
            $table->decimal('PrecioUnitario', 18)->comment('El precio por unidad del producto o servicio cotizado.');
            $table->decimal('Subtotal', 18)->comment('El total para ese ítem específico antes de aplicar descuentos o impuestos, calculado como CantidadCotizada * PrecioUnitario.');
            $table->decimal('DescuentoProducto', 18)->comment('Descuento aplicado específicamente a ese ítem de la cotización.');
            $table->decimal('ImpuestoProducto', 18)->comment('Impuesto aplicado a ese ítem de la cotización.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallecotizacion');
    }
};

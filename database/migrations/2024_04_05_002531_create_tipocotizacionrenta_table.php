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
        Schema::create('tipocotizacionrenta', function (Blueprint $table) {
            $table->integer('IdTipoCotizacionRenta', true)->comment('Identificador único para cada tipo de cotización de renta establecido por la empresa.');
            $table->text('Nombre')->comment('Nombre descriptivo del tipo de cotización de renta, como "Renta Básica", "Renta Premium", "Paquete de Negocios", "Oferta Especial", etc.');
            $table->text('Descripcion')->comment('Descripción detallada del tipo de cotización, incluyendo información sobre lo que incluye, condiciones especiales, restricciones, etc.');
            $table->decimal('PrecioBase', 18)->comment('Precio base para este tipo de cotización de renta, antes de aplicar descuentos, extras o modificaciones específicas del cliente.');
            $table->integer('KilometrajeIncluido')->comment('Cantidad de kilómetros incluidos en el precio base de la renta. ');
            $table->decimal('CostoKilometroAdicional', 18)->comment('Costo por cada kilómetro adicional al límite incluido en el contrato de renta.');
            $table->boolean('SeguroIncluido')->comment('Indica si el seguro del vehículo está incluido en el precio base (1) o no (0).');
            $table->decimal('DepositoSeguridad', 18)->comment('Monto requerido como depósito de seguridad al momento de la renta.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de cotización de renta está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipocotizacionrenta');
    }
};

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
        Schema::create('detallerentavehiculo', function (Blueprint $table) {
            $table->integer('IdRentaVehiculo')->index('fk_detallerentavehiculo_rentavehiculo')->comment('Clave foránea que referencia al registro principal de la renta de vehículo. Identifica a qué contrato de renta pertenece cada detalle.');
            $table->integer('IdVehiculo')->index('fk_detallerentavehiculo_vehiculo')->comment('Clave foránea que referencia al vehículo específico que se está rentando. Permite detallar qué vehículos están incluidos en la renta.');
            $table->integer('Cantidad')->comment('La cantidad del vehículo específico incluido en la renta. Normalmente será 1, pero el campo permite flexibilidad.');
            $table->decimal('TarifaDiaria', 18)->comment('El costo diario de renta para el vehículo especificado.');
            $table->decimal('Subtotal', 18)->comment('El costo total de la renta de ese vehículo específico.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallerentavehiculo');
    }
};

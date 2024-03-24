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
        Schema::create('abonoprestamovehiculos', function (Blueprint $table) {
            $table->integer('IdAbonoPrestamoVehiculo', true)->comment('Es el identificador único para cada registro de abono a un préstamo de vehículo.');
            $table->integer('IdTipoAbonoPrestamo')->index('fk_abonoprestamovehiculo_tipoabonoprestamo')->comment('Se refiere al identificador que clasifica el tipo de abono realizado.');
            $table->integer('IdVenta')->index('fk_abonoprestamovehiculo_venta')->comment('Clave foránea que vincula el abono a la venta específica del vehículo. Identifica la transacción de venta a la que se asocia el abono.');
            $table->date('FechaPago')->comment('Fecha en la que se efectuó el abono al préstamo del vehículo.');
            $table->decimal('Monto', 18)->comment('Cantidad de dinero abonada en el pago del préstamo.');
            $table->decimal('CargoPorMora', 18)->comment('Monto adicional que se cobra cuando hay un retraso en el pago del abono, calculado como un porcentaje sobre el monto debido o como una tarifa fija.');
            $table->text('NotaAbonoPrestamoVehiculo')->nullable()->comment('Comentarios o información adicional sobre el abono realizado.');
            $table->integer('IdPorcentajeMora')->nullable()->index('fk_abonoprestamovehiculo_porcentajemora')->comment('Identificador que se refiere a una tabla de porcentajes de mora aplicables. Este campo se usa para aplicar el porcentaje de mora correspondiente en caso de retraso en los pagos.');
            $table->boolean('Status')->default(false)->comment('Indica el estado actual del abono, como activo o inactivo (cancelado).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abonoprestamovehiculos');
    }
};

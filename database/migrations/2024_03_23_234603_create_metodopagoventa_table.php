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
        Schema::create('metodopagoventa', function (Blueprint $table) {
            $table->integer('IdFormaPago', true)->comment('Identificador único para cada método de pago registrado en el sistema.');
            $table->integer('IdVenta')->index('fk_metodopagoventa_venta')->comment('Clave foránea que referencia a la transacción de venta específica. Vincula el método de pago con una venta particular.');
            $table->decimal('PagoInicial', 18)->comment('Monto del pago inicial realizado por el cliente en la compra del vehículo.');
            $table->decimal('MontoPrestamo', 18)->comment('Cantidad total financiada después de aplicar el pago inicial.');
            $table->boolean('CartaCompromiso')->comment('Indica si se ha entregado una carta de compromiso como parte del acuerdo de pago.');
            $table->integer('Plazo')->comment('Número de meses o plazo sobre el cual se extiende el financiamiento.');
            $table->integer('IdLapsoTiempo')->index('fk_metodopagoventa_lapsotiempo');
            $table->decimal('Tasainteres', 5)->comment('Tasa de interés aplicada al monto financiado.');
            $table->integer('CantidadCuotas')->comment('Número total de cuotas en las que se divide el pago del monto financiado.');
            $table->decimal('MontoCuotas', 18)->comment('Monto de cada cuota a pagar.');
            $table->decimal('MoraAtraso', 18)->comment('Monto adicional aplicado por mora o atraso en el pago de las cuotas.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metodopagoventa');
    }
};

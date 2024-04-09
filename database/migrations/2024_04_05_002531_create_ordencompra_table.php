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
        Schema::create('ordencompra', function (Blueprint $table) {
            $table->integer('IdOrdenCompra', true)->comment('Identificador único para cada orden de compra en el sistema.');
            $table->integer('IdSuplidor')->index('fk_ordencompra_suplidor')->comment('Clave foránea que referencia al suplidor al cual se le está comprando. Este campo vincula la orden de compra específicamente con un registro de suplidor en la tabla Suplidor.');
            $table->date('Fecha')->comment('Fecha en la que se emite la orden de compra.');
            $table->decimal('Total', 18)->comment('Monto total de la orden de compra, que puede incluir la suma de todos los bienes o servicios solicitados más cualquier impuesto o cargo aplicable.');
            $table->integer('IdMoneda')->index('fk_ordencompra_moneda')->comment('Clave foránea que referencia a la moneda utilizada para la transacción. Este campo vincula la orden de compra con una moneda específica en la tabla Moneda.');
            $table->integer('IdMetodoPago')->index('fk_ordencompra_metodopago')->comment('Clave foránea que indica el método de pago acordado para la transacción (por ejemplo, transferencia bancaria, crédito, efectivo).');
            $table->integer('IdEstadoOrdenCompra')->index('fk_ordencompra_estadoordencompra')->comment('Clave foránea que referencia al estado actual de la orden de compra (por ejemplo, pendiente, completada, cancelada).');
            $table->integer('IdUsuario')->index('fk_ordencompra_usuario')->comment('Clave foránea que referencia al usuario o empleado que emite o gestiona la orden de compra.');
            $table->text('Referencia')->comment('Un campo opcional para cualquier referencia adicional necesaria, como un número de contrato o proyecto asociado.');
            $table->date('FechaRecepcion')->nullable()->comment('Fecha estimada o real de recepción de los bienes o servicios adquiridos.');
            $table->text('ObservacionOrdenCompra')->nullable()->comment('Comentarios adicionales o especificaciones sobre la orden de compra.');
            $table->boolean('Status')->default(false)->comment('Indica si la orden de compra está activa (1) o inactiva (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordencompra');
    }
};

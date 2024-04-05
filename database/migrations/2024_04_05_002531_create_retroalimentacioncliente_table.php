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
        Schema::create('retroalimentacioncliente', function (Blueprint $table) {
            $table->integer('IdRetroalimentacionCliente', true)->comment('Identificador único para cada instancia de retroalimentación de cliente en el sistema.');
            $table->integer('IdTipoRetroalimentacion')->index('fk_retroalimentacioncliente_tiporetroalimentacion')->comment('Clave foránea que referencia el tipo de retroalimentación recibida (por ejemplo, queja, sugerencia, elogio). Se vincula con una tabla TipoRetroalimentacion donde se detallan estos tipos.');
            $table->integer('IdCliente')->index('fk_retroalimentacioncliente_cliente')->comment('Clave foránea que referencia al cliente que proporciona la retroalimentación. Esto permite vincular directamente la retroalimentación a un registro específico de cliente.');
            $table->text('Comentario')->comment('El comentario o contenido específico de la retroalimentación proporcionada por el cliente.');
            $table->dateTime('Fecha')->comment('La fecha en la que se recibió la retroalimentación.');
            $table->integer('Calificacion')->comment('Una calificación numérica asociada a la retroalimentación, si aplica. Esto puede ser útil para clasificar la gravedad o satisfacción.');
            $table->integer('IdMovimientoRetroalimentacion')->index('fk_retroalimentacioncliente_movimientoretroalimentacion')->comment('Clave foránea que categoriza el movimiento o acción resultante de la retroalimentación, como un seguimiento, una mejora implementada, etc.');
            $table->text('Referencia')->comment('Información de referencia adicional sobre la retroalimentación, como el producto o servicio específico al que se refiere.');
            $table->boolean('VerificacionEmpresa')->comment('Indica si la empresa ha verificado y tomado en cuenta la retroalimentación para acciones internas.');
            $table->boolean('Status')->default(false)->comment('Indica si el registro de retroalimentación está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retroalimentacioncliente');
    }
};

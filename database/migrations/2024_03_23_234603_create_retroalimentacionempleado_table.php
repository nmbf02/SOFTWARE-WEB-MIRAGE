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
        Schema::create('retroalimentacionempleado', function (Blueprint $table) {
            $table->integer('IdRetroalimentacionEmpleado', true)->comment('Identificador único para cada instancia de retroalimentación relacionada con empleados registrada en el sistema.');
            $table->integer('IdRetroalimentacionCliente')->index('fk_retroalimentacionempleado_retroalimentacioncliente')->comment('Clave foránea opcional que vincula la retroalimentación del empleado con una instancia específica de retroalimentación recibida de un cliente. Esto es relevante si la retroalimentación del empleado está directamente relacionada con comentarios o valoraciones de clientes.
');
            $table->text('AccionTomada')->comment('Descripción de las acciones tomadas en respuesta a la retroalimentación recibida, ya sea una acción correctiva, reconocimiento, capacitación, etc.');
            $table->dateTime('FechaAccion')->comment('Fecha en la que se tomaron las acciones en respuesta a la retroalimentación.');
            $table->text('DetalleAccion')->comment('Detalles adicionales sobre la acción tomada, proporcionando contexto o explicando el resultado esperado.');
            $table->integer('IdEmpleado')->index('fk_retroalimentacionempleado_empleado')->comment('Clave foránea que referencia al empleado que recibe o proporciona la retroalimentación.');
            $table->text('Nota')->comment('Notas adicionales sobre la retroalimentación, incluyendo observaciones, sentimientos, recomendaciones, etc.');
            $table->dateTime('FechaSeguimiento')->comment('Fecha programada para un seguimiento posterior, asegurando que las acciones tomadas sean efectivas o revisando la necesidad de más intervenciones.');
            $table->integer('IdCanalComunicacion')->index('fk_retroalimentacionempleado_canalcomunicacion')->comment('Clave foránea que referencia al canal a través del cual se recibió o se entregó la retroalimentación (por ejemplo, reunión personal, sistema interno de retroalimentación, correo electrónico).');
            $table->integer('IdPrioridadComunicacion')->index('fk_retroalimentacionempleado_prioridadcomunicacion')->comment('Clave foránea que indica la prioridad de la comunicación, ayudando a gestionar la urgencia con la que se debe tratar la retroalimentación.');
            $table->integer('IdMovimientoRetroalimentacion')->index('fk_retroalimentacionempleado_movimientoretroalimentacion')->comment('Clave foránea que categoriza el tipo de movimiento generado por la retroalimentación, como mejora, reconocimiento, corrección, entre otros.');
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
        Schema::dropIfExists('retroalimentacionempleado');
    }
};

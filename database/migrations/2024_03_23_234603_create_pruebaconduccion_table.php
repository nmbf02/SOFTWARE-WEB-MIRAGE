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
        Schema::create('pruebaconduccion', function (Blueprint $table) {
            $table->integer('IdPruebaConduccion', true)->comment('Identificador único para cada prueba de conducción realizada.');
            $table->integer('IdSolicitudCita')->index('fk_pruebaconduccion_solicitudcita')->comment('Clave foránea que referencia a la solicitud de cita para una prueba de conducción. Vincula la prueba de conducción con una solicitud específica realizada por el cliente.');
            $table->date('Fecha')->comment('Fecha en la que se llevó a cabo la prueba de conducción.');
            $table->integer('Duracion')->comment('Duración de la prueba de conducción, generalmente expresada en minutos.');
            $table->integer('IdLapsoTiempo')->index('fk_pruebaconduccion_lapsotiempo')->comment('Especifica el tiempo que duro, ya sea minutos, horas, etc.');
            $table->integer('IdEmpleado')->index('fk_pruebaconduccion_empleado')->comment('Clave foránea que referencia al empleado que acompañó al cliente durante la prueba de conducción. Esto podría ser un vendedor o un técnico especializado.');
            $table->text('Observacion')->nullable()->comment('Comentarios u observaciones realizadas por el empleado o el cliente sobre la prueba de conducción. Puede incluir detalles sobre el rendimiento del vehículo, preferencias del cliente o cualquier incidente durante la prueba.');
            $table->boolean('Status')->default(false)->comment('Indica si el registro de la prueba de conducción está activo (1) o no (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pruebaconduccion');
    }
};

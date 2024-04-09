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
        Schema::create('ordenreparacion', function (Blueprint $table) {
            $table->integer('IdOrdenReparacion', true)->comment('Identificador único para cada orden de reparación registrada en el sistema.');
            $table->integer('IdVehiculo')->index('fk_ordenreparacion_vehiculos')->comment('Clave foránea que referencia al vehículo o equipo que está siendo reparado. Este campo vincula la orden de reparación específicamente con un registro de vehículo o equipo en su respectiva tabla.');
            $table->integer('IdEmpleado')->index('fk_ordenreparacion_empleados')->comment('Clave foránea que referencia al empleado o técnico responsable de la reparación.');
            $table->date('Fecha')->comment('Fecha en la que se registra o se inicia la orden de reparación.');
            $table->integer('IdTipoMotivoOrdenReparacion')->index('fk_ordenreparacion_tipomotivoordenreparacion')->comment('Clave foránea que referencia al motivo o tipo de reparación que se está llevando a cabo (por ejemplo, mantenimiento preventivo, reparación de avería, etc.).');
            $table->text('Descripcion')->comment('Descripción detallada de la reparación a realizar o del problema a solucionar.');
            $table->date('FechaEntrada')->comment('Fecha en la que el vehículo o equipo ingresa al taller o al lugar de reparación.');
            $table->date('FechaSalidaEstimada')->nullable()->comment('Fecha estimada para la finalización de la reparación y entrega del vehículo o equipo.');
            $table->date('FechaFinalizacion')->nullable()->comment('Fecha real en la que se completó la reparación.');
            $table->text('Observacion')->nullable()->comment('Observaciones adicionales sobre la orden de reparación.');
            $table->integer('IdEstadoOrden')->index('fk_ordenreparacion_estadoordenreparacion')->comment('Clave foránea que referencia al estado actual de la orden de reparación (por ejemplo, en proceso, completada, en espera de piezas).');
            $table->integer('IdSuplidor')->index('fk_ordenreparacion_suplidor')->comment('Clave foránea opcional que referencia al suplidor de las piezas o componentes necesarios para la reparación.');
            $table->boolean('Status')->default(false)->comment('Indica si la orden de reparación está activa (1) o inactiva (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenreparacion');
    }
};

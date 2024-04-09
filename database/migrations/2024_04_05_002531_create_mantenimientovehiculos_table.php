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
        Schema::create('mantenimientovehiculos', function (Blueprint $table) {
            $table->integer('IdMantenimientoVehiculos', true)->comment('Identificador único para cada registro de mantenimiento realizado a los vehículos.');
            $table->integer('IdTipoMantenimiento')->index('fk_mantenimientovehiculos_tipomantenimiento')->comment('Clave foránea que referencia al tipo de mantenimiento realizado (por ejemplo, mantenimiento preventivo, cambio de aceite, reparaciones específicas). Facilita la clasificación y análisis del mantenimiento.');
            $table->decimal('Monto', 18)->comment('Costo asociado al mantenimiento realizado. Este campo es crucial para la gestión financiera del mantenimiento de la flota.
');
            $table->integer('IdMoneda')->index('fk_mantenimientovehiculos_moneda')->comment('Clave foránea que referencia a la tabla Moneda, indicando la moneda en que se expresan los costos del mantenimiento.');
            $table->integer('IdOrdenReparacion')->index('fk_mantenimientovehiculos_ordenreparacion')->comment('Clave foránea que vincula el mantenimiento con una orden de reparación específica, si aplica. Permite correlacionar los trabajos de mantenimiento con las órdenes de servicio correspondientes.');
            $table->text('NotaChequeoVehiculo')->nullable()->comment('Observaciones o notas adicionales sobre el estado del vehículo o detalles específicos del mantenimiento realizado.');
            $table->boolean('Status')->default(false)->comment('Indica si el registro de mantenimiento está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mantenimientovehiculos');
    }
};

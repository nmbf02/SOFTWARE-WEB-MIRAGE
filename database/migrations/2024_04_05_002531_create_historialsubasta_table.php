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
        Schema::create('historialsubasta', function (Blueprint $table) {
            $table->integer('IdVehiculo')->index('fk_historialsubasta_vehiculo')->comment('Clave foránea que referencia al vehículo o artículo que fue subastado. Este campo vincula el registro del historial directamente con un artículo específico en su respectiva tabla.');
            $table->integer('IdSubasta')->index('fk_historialsubasta_subasta')->comment('Clave foránea que referencia a la subasta específica. Proporciona un enlace directo al evento de subasta en el que el artículo fue vendido.');
            $table->dateTime('FechaSubasta')->comment('Fecha y hora en que se llevó a cabo la subasta. Este campo ayuda a identificar cuándo se realizó la venta del artículo.');
            $table->integer('Cantidad')->comment(' Cantidad subastada.');
            $table->decimal('Precio', 18)->comment('Precio final al que se vendió el artículo en la subasta. Este dato es crucial para el análisis de tendencias de precios y valoración de artículos similares en el futuro.');
            $table->float('Descuento')->nullable();
            $table->boolean('EstadoSubasta')->comment('Indica el estado final de la venta (por ejemplo, completada, cancelada, etc.). Este campo es importante para filtrar las ventas efectivas de aquellas que no se concretaron.');
            $table->boolean('Status')->default(false)->comment('Indica si el registro del historial de la subasta está activo (1) o inactivo (0). Esto puede ser útil para gestionar registros históricos y mantener la integridad de los datos.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historialsubasta');
    }
};

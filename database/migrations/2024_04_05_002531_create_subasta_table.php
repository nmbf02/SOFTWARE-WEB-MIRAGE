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
        Schema::create('subasta', function (Blueprint $table) {
            $table->integer('IdSubasta', true)->comment('Identificador único para cada subasta. Sirve como la clave principal de la tabla.');
            $table->integer('IdVehiculo')->index('fk_subasta_vehiculo')->comment('Clave foránea que referencia al vehículo (o artículo) que se está subastando. Este campo vincula la subasta con el registro específico del vehículo en la base de datos.');
            $table->dateTime('FechaInicio')->comment('Fecha y hora de inicio de la subasta. Indica cuándo la subasta se abre para ofertas.');
            $table->dateTime('FechaFin')->comment('Fecha y hora en la que la subasta está programada para finalizar. Después de este momento, no se aceptarán más ofertas.');
            $table->decimal('PrecioInicial', 18)->comment('Precio inicial de la subasta. Es el precio mínimo a partir del cual comenzarán las ofertas.');
            $table->integer('IdEstadoSubasta')->index('fk_subasta_estadosubasta')->comment(' Nombre o descripción del estado de la subasta, como "Activa", "Pendiente", "Finalizada", "Cancelada", etc. ');
            $table->boolean('Status')->default(false)->comment('Indica si el estado de la subasta está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subasta');
    }
};

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
        Schema::create('tipovehiculos', function (Blueprint $table) {
            $table->integer('IdTipoVehiculo', true)->comment('Identificador único para cada tipo de vehículo listado en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del tipo de vehículo. Este campo proporciona información clave sobre la categoría a la que pertenece el vehículo, lo cual es relevante para la selección por parte de los clientes y para la gestión del inventario.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de vehículo está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipovehiculos');
    }
};

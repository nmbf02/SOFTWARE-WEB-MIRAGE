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
        Schema::create('tipovehiculoconcesionario', function (Blueprint $table) {
            $table->integer('IdTipoVehiculoConcesionario', true)->comment('Identificador único para cada tipo o categoría de vehículo definido por el concesionario.');
            $table->text('Descripcion')->comment('Informa si el vehiculo es: Renta, venta o subasta.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de vehículo está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipovehiculoconcesionario');
    }
};

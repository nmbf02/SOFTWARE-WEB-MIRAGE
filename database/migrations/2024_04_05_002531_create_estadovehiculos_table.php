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
        Schema::create('estadovehiculos', function (Blueprint $table) {
            $table->integer('IdEstadoVehiculo', true)->comment('Identificador único para cada estado posible de un vehículo dentro del sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del estado del vehículo.');
            $table->boolean('Status')->default(false)->comment('Indica si el estado del vehículo está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadovehiculos');
    }
};

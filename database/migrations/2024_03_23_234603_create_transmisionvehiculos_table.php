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
        Schema::create('transmisionvehiculos', function (Blueprint $table) {
            $table->integer('IdTransmisionVehiculo', true)->comment('Identificador único para cada tipo de transmisión listado en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del tipo de transmisión del vehículo. Este campo proporciona información clave sobre el mecanismo de transmisión, lo cual es un factor importante para muchos compradores y usuarios de vehículos.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de transmisión está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transmisionvehiculos');
    }
};

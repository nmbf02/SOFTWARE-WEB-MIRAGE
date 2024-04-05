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
        Schema::create('duenovehiculos', function (Blueprint $table) {
            $table->integer('IdCliente')->index('fk_duenovehiculos_cliente')->comment('Clave foránea que referencia al cliente (dueño del vehículo). Este campo identifica quién es el propietario actual del vehículo.');
            $table->integer('IdVehiculo')->index('fk_duenovehiculos_vehiculos')->comment('Clave foránea que referencia al vehículo en cuestión. Este campo señala el vehículo específico que es poseído por el cliente.');
            $table->date('FechaAdquisicion')->comment('Fecha en la que el cliente adquirió el vehículo. Esto es importante para la historia de propiedad del vehículo.');
            $table->date('FechaFinPropiedad')->nullable()->comment('Fecha en la que el cliente dejó de ser el propietario del vehículo. Este campo es útil para rastrear la historia de propiedad si el vehículo cambia de dueño.');
            $table->boolean('Status')->default(false)->comment('Indica si el registro está activo (1) o inactivo (0). Un registro inactivo podría indicar que el vehículo ya no pertenece a ese cliente.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('duenovehiculos');
    }
};

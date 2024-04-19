<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('IdVehiculo');
            $table->integer('IdModeloVehiculo');
            $table->integer('IdColorVehiculo');
            $table->integer('IdEstadoVehiculo');
            $table->integer('AnoVehiculo');
            $table->text('VIN');
            $table->decimal('Precio', 18, 2);
            $table->integer('IdUbicacion');
            $table->integer('IdSeguroVehiculo');
            $table->integer('IdTransmisionVehiculo');
            $table->integer('IdTraccionVehiculo');
            $table->text('MotorCilindro');
            $table->text('Serie');
            $table->integer('IdTipoVehiculoConcesionario');
            $table->integer('IdTipoVehiculo');
            $table->text('Placa');
            $table->text('PlacaExhibicion');
            $table->text('Chasis');
            $table->text('Matricula');
            $table->text('Marbete');
            $table->integer('CapacidadPasajeros');
            $table->date('FechaExpedicion');
            $table->integer('IdSegmentoMercado');
            $table->integer('IdClasificacionVehiculo');
            $table->integer('IdTipoItbis');
            $table->integer('IdGarantia');
            $table->boolean('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};

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
        Schema::create('aseguradoravehiculos', function (Blueprint $table) {
            $table->integer('IdAseguradoraVehiculo', true)->comment('Es el identificador único para cada aseguradora de vehículos en la tabla.');
            $table->text('Nombre')->comment('El nombre de la aseguradora de vehículos.');
            $table->integer('IdSector')->index('fk_aseguradoravehiculos_sector')->comment('Clave foránea que hace referencia al sector en el que la aseguradora está ubicada, vinculándola con la tabla Sector.');
            $table->text('Calle')->nullable()->comment('La calle donde se encuentra la aseguradora.');
            $table->text('NumeroEdificio')->nullable()->comment('El número de edificio donde se encuentra la aseguradora.');
            $table->text('Telefono')->nullable()->comment('El número de teléfono de la aseguradora.');
            $table->text('Email')->comment('El correo electrónico de contacto de la aseguradora.');
            $table->boolean('Status')->default(false)->comment('El estado de la aseguradora, donde 1 suele indicar que está activa y 0 que está inactiva.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aseguradoravehiculos');
    }
};

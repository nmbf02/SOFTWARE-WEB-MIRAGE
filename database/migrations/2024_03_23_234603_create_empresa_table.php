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
        Schema::create('empresa', function (Blueprint $table) {
            $table->integer('IdEmpresa', true)->comment('Identificador único para cada empresa.');
            $table->text('Nombre')->comment('Nombre oficial de la empresa.');
            $table->text('AbreviaturaNombre')->nullable()->comment('Abreviatura o forma corta del nombre de la empresa.');
            $table->text('RUC')->comment('Registro Único de Contribuyentes o equivalente, identificador fiscal de la empresa.');
            $table->integer('IdSector')->index('fk_empresa_sector')->comment('Clave foránea que referencia al sector o ubicación geográfica de la empresa.');
            $table->text('Calle')->nullable()->comment('Dirección de la calle donde se encuentra la empresa.');
            $table->text('NumeroEdificio')->nullable()->comment('Número del edificio o dirección específica de la empresa.');
            $table->text('Telefono')->comment('Número de teléfono de contacto de la empresa.');
            $table->text('Email')->comment('Correo electrónico de contacto de la empresa.');
            $table->boolean('Status')->default(false)->comment('Indica si la empresa está activa (1) o inactiva (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
};

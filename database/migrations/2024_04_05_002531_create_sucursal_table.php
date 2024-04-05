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
        Schema::create('sucursal', function (Blueprint $table) {
            $table->integer('IdSucursal', true)->comment('Identificador único para cada sucursal registrada en el sistema.');
            $table->text('Nombre')->comment('Nombre de la sucursal, que puede incluir la ubicación o alguna característica distintiva para facilitar su identificación.');
            $table->integer('IdEmpresa')->index('fk_sucursal_empresa')->comment('Clave foránea que referencia a la tabla Empresa. Identifica a qué empresa pertenece la sucursal.');
            $table->integer('IdSector')->index('fk_sucursal_sector')->comment('Clave foránea que referencia a la tabla Sector para indicar la ubicación específica de la sucursal dentro de una región o área geográfica.');
            $table->text('Calle')->comment('Dirección de la calle donde se encuentra la sucursal.');
            $table->text('NumeroEdificio')->comment('Número del edificio o número de localización específica de la sucursal.');
            $table->text('Telefono')->comment('Número de teléfono de contacto de la sucursal.');
            $table->text('Email')->comment('Correo electrónico de contacto de la sucursal.');
            $table->boolean('Status')->default(false)->comment('Indica si la sucursal está activa (1) o inactiva (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sucursal');
    }
};

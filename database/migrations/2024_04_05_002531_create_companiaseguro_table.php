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
        Schema::create('companiaseguro', function (Blueprint $table) {
            $table->integer('IdCompaniaSeguro', true)->comment('Identificador único para cada compañía de seguros en la base de datos.');
            $table->text('Nombre')->comment('Nombre de la compañía de seguros.');
            $table->text('Telefono')->comment('Número de teléfono de contacto de la compañía de seguros.');
            $table->text('Email')->comment('Dirección de correo electrónico de la compañía de seguros.');
            $table->integer('IdSector')->index('fk_companiaseguro_sector')->comment('Clave foránea que referencia a la tabla Sector, indicando el sector geográfico donde se ubica la compañía de seguros.');
            $table->boolean('Status')->default(false)->comment('Indica si la compañía de seguros está activa (1) o inactiva (0) en el sistema.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companiaseguro');
    }
};

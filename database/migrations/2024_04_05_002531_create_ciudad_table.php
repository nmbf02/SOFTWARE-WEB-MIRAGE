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
        Schema::create('ciudad', function (Blueprint $table) {
            $table->integer('IdCiudad', true)->comment('Identificador único para cada ciudad registrada en la base de datos.');
            $table->text('Descripcion')->comment('Nombre o descripción de la ciudad.');
            $table->integer('IdProvincia')->index('fk_ciudad_provincia')->comment('Clave foránea que referencia a la Provincia a la cual pertenece la ciudad. Esto establece una relación jerárquica entre provincia y sus ciudades.');
            $table->boolean('Status')->default(false)->comment('Indica si la ciudad está activa (1) o inactiva (0) dentro del sistema.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudad');
    }
};

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
        Schema::create('ubicacion', function (Blueprint $table) {
            $table->integer('IdUbicacion', true)->comment('Identificador único para cada ubicación registrada en el sistema.');
            $table->integer('IdAlmacen')->index('fk_ubicacionvehiculo_almacen')->comment('Clave foránea que referencia al almacén o sucursal al que pertenece la ubicación. Esto permite asociar la ubicación con un lugar físico específico dentro de la estructura organizativa.');
            $table->text('Descripcion')->comment('Descripción detallada de la ubicación, que puede incluir información como el pasillo, estante, sección o cualquier otro detalle relevante para identificar la ubicación específica dentro del almacén o sucursal.');
            $table->boolean('Status')->default(false)->comment('Indica si la ubicación está activa (1) o inactiva (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubicacion');
    }
};

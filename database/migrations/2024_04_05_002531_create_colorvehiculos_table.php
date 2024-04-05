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
        Schema::create('colorvehiculos', function (Blueprint $table) {
            $table->integer('IdColorVehiculo', true)->comment('Identificador único para cada color de vehículo registrado en la base de datos.');
            $table->text('Descripcion')->comment('Describe el color del vehículo.');
            $table->integer('IdAcabadoColorVehiculo')->index('fk_colorvehiculos_acabadocolorvehiculos')->comment('Clave foránea que vincula el color del vehículo con un registro en la tabla AcabadoColorVehiculos. Esto permite asociar el color con un tipo específico de acabado, como mate, brillante, metalizado, etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el color del vehículo está activo (1) o inactivo (0) en el sistema.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colorvehiculos');
    }
};

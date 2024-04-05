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
        Schema::create('modelovehiculos', function (Blueprint $table) {
            $table->integer('IdModeloVehiculo', true)->comment('Identificador único para cada modelo de vehículo registrado en la base de datos.');
            $table->integer('IdMarcaVehiculo')->index('fk_modelovehiculos_marcavehiculos')->comment('Clave foránea que referencia a la tabla MarcaVehiculos. Identifica la marca a la que pertenece el modelo de vehículo.');
            $table->text('Descripcion')->comment('Descripción o nombre del modelo del vehículo. Puede incluir detalles como el año de fabricación, características especiales, o configuraciones.');
            $table->boolean('Status')->default(false)->comment('Indica si el modelo de vehículo está activo (1) o inactivo (0) en el sistema. ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modelovehiculos');
    }
};

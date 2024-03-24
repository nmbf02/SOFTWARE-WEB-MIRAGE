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
        Schema::create('clasificacionvehiculos', function (Blueprint $table) {
            $table->integer('IdClasificacionVehiculo', true)->comment('Identificador único para cada clasificación de vehículo registrada en la base de datos. ');
            $table->text('Descripcion')->comment('Descripción o nombre de la clasificación del vehículo, como por ejemplo, "Comercial", "Personal", "De carga", "De lujo", etc. Este campo detalla el propósito o las características que definen a la clasificación.');
            $table->boolean('Status')->default(false)->comment('Indica el estado de la clasificación en el sistema. Un valor de 1 generalmente significa que la clasificación está activa y un valor de 0 indicaría que está inactiva.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clasificacionvehiculos');
    }
};

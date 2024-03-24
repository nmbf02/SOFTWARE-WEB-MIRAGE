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
        Schema::create('marcavehiculos', function (Blueprint $table) {
            $table->integer('IdMarcaVehiculo', true)->comment('Identificador único para cada marca de vehículo registrada en el sistema.');
            $table->text('Descripcion')->comment('Nombre o descripción de la marca del vehículo, como "Toyota", "Ford", "BMW", etc. Este campo facilita la identificación y categorización de los vehículos en la base de datos.');
            $table->integer('IdGrupoVehiculo')->index('fk_marcavehiculos_grupovehiculos')->comment('Clave foránea que referencia al grupo o categoría a la que pertenece la marca, por ejemplo, lujo, utilitario, deportivo, etc. Este campo permite agrupar marcas de vehículos con características o segmentos de mercado similares.');
            $table->boolean('Status')->default(false)->comment('Indica si la marca de vehículo está activa (1) o inactiva (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcavehiculos');
    }
};

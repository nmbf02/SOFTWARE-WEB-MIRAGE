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
        Schema::create('garantia', function (Blueprint $table) {
            $table->integer('IdGarantia', true)->comment('Identificador único para cada garantía registrada en el sistema.');
            $table->text('Nombre')->comment('Nombre o título de la garantía, que puede incluir el tipo de garantía o el producto/servicio asociado.');
            $table->text('Descripcion')->comment('Descripción detallada de la garantía, incluyendo lo que cubre, condiciones, exclusiones, etc.');
            $table->date('FechaInicio')->comment('Fecha de inicio de la validez de la garantía.');
            $table->date('FechaFin')->comment('Fecha de fin de la validez de la garantía, tras la cual ya no aplicará.');
            $table->decimal('Cobertura', 18)->comment('Monto o valor de la cobertura de la garantía, que puede ser un porcentaje del valor del producto o un monto fijo.');
            $table->decimal('Deducible', 18)->comment('Monto deducible que el cliente debe pagar para hacer efectiva la garantía.');
            $table->decimal('PrimaBase', 18)->nullable()->comment('Costo base de la garantía, aplicable en algunos casos donde la garantía es opcional o extendida.');
            $table->decimal('Duracion', 18)->comment('Muestra el tiempo en numeros.');
            $table->integer('IdLapsoTiempo')->index('fk_tipogarantia_lapsotiempo')->comment('Clave foránea opcional que vincula la garantía con un periodo de tiempo específico en la tabla LapsoTiempo, por ejemplo, para garantías extendidas.');
            $table->boolean('Status')->default(false)->comment('Indica si el registro de garantía está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('garantia');
    }
};

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
        Schema::create('tiposeguro', function (Blueprint $table) {
            $table->integer('IdTipoSeguro', true)->comment('Identificador único para cada tipo de seguro listado en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del tipo de seguro. Este campo proporciona información detallada sobre la cobertura que ofrece el seguro, como "Seguro de Responsabilidad Civil", "Seguro a Todo Riesgo", "Seguro de Robo", etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de seguro está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiposeguro');
    }
};

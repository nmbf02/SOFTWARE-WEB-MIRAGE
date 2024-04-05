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
        Schema::create('tiporetroalimentacion', function (Blueprint $table) {
            $table->integer('IdTipoRetroalimentacion', true)->comment('Identificador único para cada tipo de retroalimentación clasificado en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del tipo de retroalimentación. Este campo especifica la naturaleza de la retroalimentación, como "Sugerencia", "Queja", "Complimiento", "Consulta", etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de retroalimentación está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiporetroalimentacion');
    }
};

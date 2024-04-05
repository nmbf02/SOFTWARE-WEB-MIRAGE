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
        Schema::create('segmentomercado', function (Blueprint $table) {
            $table->integer('IdSegmentoMercado', true)->comment('Identificador único para cada segmento de mercado de vehículos en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del segmento de mercado, como "Compactos", "SUV", "Lujo", "Deportivos", "Comerciales", etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el segmento de mercado está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('segmentomercado');
    }
};

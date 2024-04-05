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
        Schema::create('lapsotiempo', function (Blueprint $table) {
            $table->integer('IdLapsoTiempo', true)->comment('Identificador único para cada registro de lapso de tiempo en el sistema.');
            $table->text('Descripcion')->comment('Una descripción o nombre del lapso de tiempo, como "6 meses", "1 año", "30 días", etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el lapso de tiempo está activo (1) o inactivo (0). Esto puede ser útil para desactivar temporalmente ciertas opciones sin eliminarlas del sistema.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lapsotiempo');
    }
};

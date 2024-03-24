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
        Schema::create('estadopoliza', function (Blueprint $table) {
            $table->integer('IdEstadoPoliza', true)->comment('Identificador único para cada estado de póliza posible dentro del sistema. Este campo sirve como la clave primaria de la tabla.');
            $table->text('Descripcion')->comment('Descripción o nombre del estado de la póliza, como "Activa", "Cancelada", "En Espera", "Vencida", etc. Este campo proporciona una comprensión clara del estado actual de la póliza de seguro.');
            $table->boolean('Status')->default(false)->comment('Indica si el estado de la póliza está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadopoliza');
    }
};

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
        Schema::create('canalcomunicacion', function (Blueprint $table) {
            $table->integer('IdCanalComunicacion', true)->comment('El identificador único para cada canal de comunicación en la tabla.');
            $table->text('Descripcion')->comment(' La descripción o el nombre del canal de comunicación, como podría ser "Correo electrónico", "Teléfono", "Presencial", "Chat en línea", etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el canal de comunicación está activo (1) o inactivo (0) en el sistema.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canalcomunicacion');
    }
};

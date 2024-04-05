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
        Schema::create('viasolicitud', function (Blueprint $table) {
            $table->integer('IdViaSolicitud', true)->comment('Identificador único para cada vía de solicitud disponible en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre de la vía de solicitud, como "Online", "Telefónica", "Presencial", "Correo Electrónico", etc. Este campo facilita la identificación y categorización de las solicitudes según el canal utilizado por el cliente.');
            $table->boolean('Status')->default(false)->comment('Indica si la vía de solicitud está activa (1) o inactiva (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viasolicitud');
    }
};

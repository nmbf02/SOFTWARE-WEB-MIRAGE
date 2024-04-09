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
        Schema::create('tipomotivoordenreparacion', function (Blueprint $table) {
            $table->integer('IdTipoMotivoOrdenReparacion', true)->comment('Identificador único para cada tipo de motivo por el que se puede generar una orden de reparación.');
            $table->text('Descripcion')->comment('Descripción o nombre del motivo de la orden de reparación. Ejemplos comunes incluyen "Mantenimiento Preventivo", "Fallo del Motor", "Sistema Eléctrico", "Aire Acondicionado", "Reparación de Carrocería", etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el tipo de motivo de orden de reparación está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipomotivoordenreparacion');
    }
};

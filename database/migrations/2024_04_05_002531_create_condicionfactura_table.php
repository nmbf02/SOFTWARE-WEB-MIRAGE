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
        Schema::create('condicionfactura', function (Blueprint $table) {
            $table->integer('IdCondicionFactura', true)->comment('Identificador único para cada condición de factura en la base de datos.');
            $table->text('Descripcion')->comment('Detalle o descripción de la condición de factura, que podría incluir términos como "Préstamo", "Pago al contado", etc.');
            $table->integer('CantidadDias')->comment('Número de días concedidos para el pago de la factura bajo esta condición. Para condiciones de pago al contado, este valor puede ser 0.');
            $table->boolean('Status')->default(false)->comment('Indica si la condición de factura está activa (1) o inactiva (0) en el sistema.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condicionfactura');
    }
};

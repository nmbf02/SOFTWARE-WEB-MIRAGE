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
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('IdCliente', true)->comment('Identificador único para cada cliente registrado en el sistema.');
            $table->integer('IdPersona')->index('fk_clientes_persona')->comment('Clave foránea que vincula al cliente con su registro correspondiente en la tabla Persona, donde se almacena información personal básica.');
            $table->integer('IdTipoPersona')->index('fk_clientes_tipopersona')->comment('Clave foránea que indica el tipo de persona (por ejemplo empresa, independiente) asociado con el cliente.');
            $table->integer('IdCategoriaLicencia')->index('fk_clientes_categorialicencia')->comment('Clave foránea que referencia a la CategoriaLicencia del cliente, útil para empresas que requieren esta información para la contratación de servicios o venta de productos.');
            $table->integer('IdCondicionFactura')->index('fk_clientes_condicionfactura')->comment('Clave foránea que apunta a la tabla CondicionFactura, indicando las condiciones de facturación preferentes o acordadas para el cliente.');
            $table->boolean('Status')->default(false)->comment('Indica si el cliente está activo (1) o inactivo (0) en el sistema.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};

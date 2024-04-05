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
        Schema::create('ofertasubasta', function (Blueprint $table) {
            $table->integer('IdSubasta')->index('fk_ofertasubasta_subasta')->comment('Clave foránea que referencia a la subasta específica a la que pertenece la oferta. Este campo vincula cada oferta con su respectiva subasta.');
            $table->integer('IdCliente')->index('fk_ofertasubasta_cliente')->comment('Clave foránea que referencia al cliente (o participante de la subasta) que realiza la oferta. Permite identificar quién hizo cada oferta.');
            $table->decimal('MontoOferta', 18)->comment('El monto de la oferta realizada por el participante. Es el valor que el participante está dispuesto a pagar por el artículo o vehículo subastado.');
            $table->dateTime('FechaOferta')->comment('La fecha y hora en que se realizó la oferta. Este campo es crucial para determinar el orden de las ofertas y gestionar la subasta de manera efectiva.');
            $table->boolean('Status')->default(false)->comment('Indica si el registro de la oferta está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertasubasta');
    }
};

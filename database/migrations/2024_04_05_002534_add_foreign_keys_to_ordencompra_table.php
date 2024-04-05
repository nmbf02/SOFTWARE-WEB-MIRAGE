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
        Schema::table('ordencompra', function (Blueprint $table) {
            $table->foreign(['IdEstadoOrdenCompra'], 'FK_OrdenCompra_EstadoOrdenCompra')->references(['IdEstadoOrdenCompra'])->on('estadoordencompra')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdMetodoPago'], 'FK_OrdenCompra_MetodoPago')->references(['IdMetodoPago'])->on('metodopago')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdMoneda'], 'FK_OrdenCompra_Moneda')->references(['IdMoneda'])->on('moneda')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdSuplidor'], 'FK_OrdenCompra_Suplidor')->references(['IdSuplidor'])->on('suplidor')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdUsuario'], 'FK_OrdenCompra_Usuario')->references(['IdUsuario'])->on('usuario')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ordencompra', function (Blueprint $table) {
            $table->dropForeign('FK_OrdenCompra_EstadoOrdenCompra');
            $table->dropForeign('FK_OrdenCompra_MetodoPago');
            $table->dropForeign('FK_OrdenCompra_Moneda');
            $table->dropForeign('FK_OrdenCompra_Suplidor');
            $table->dropForeign('FK_OrdenCompra_Usuario');
        });
    }
};

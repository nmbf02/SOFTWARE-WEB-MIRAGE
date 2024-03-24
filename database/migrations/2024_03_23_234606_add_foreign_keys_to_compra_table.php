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
        Schema::table('compra', function (Blueprint $table) {
            $table->foreign(['IdEstadoCompra'], 'FK_Compra_EstadoCompra')->references(['IdEstadoCompra'])->on('estadocompra')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdMetodoPago'], 'FK_Compra_MetodoPago')->references(['IdMetodoPago'])->on('metodopago')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdMoneda'], 'FK_Compra_Moneda')->references(['IdMoneda'])->on('moneda')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdOrdenCompra'], 'FK_Compra_OrdenCompra')->references(['IdOrdenCompra'])->on('ordencompra')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdSuplidor'], 'FK_Compra_Suplidor')->references(['IdSuplidor'])->on('suplidor')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdUsuario'], 'FK_Compra_Usuario')->references(['IdUsuario'])->on('usuario')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('compra', function (Blueprint $table) {
            $table->dropForeign('FK_Compra_EstadoCompra');
            $table->dropForeign('FK_Compra_MetodoPago');
            $table->dropForeign('FK_Compra_Moneda');
            $table->dropForeign('FK_Compra_OrdenCompra');
            $table->dropForeign('FK_Compra_Suplidor');
            $table->dropForeign('FK_Compra_Usuario');
        });
    }
};

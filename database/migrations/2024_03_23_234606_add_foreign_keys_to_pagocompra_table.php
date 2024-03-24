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
        Schema::table('pagocompra', function (Blueprint $table) {
            $table->foreign(['IdCompra'], 'FK_PagoCompra_Compra')->references(['IdCompra'])->on('compra')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdMetodoPago'], 'FK_PagoCompra_MetodoPago')->references(['IdMetodoPago'])->on('metodopago')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pagocompra', function (Blueprint $table) {
            $table->dropForeign('FK_PagoCompra_Compra');
            $table->dropForeign('FK_PagoCompra_MetodoPago');
        });
    }
};

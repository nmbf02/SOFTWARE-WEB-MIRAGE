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
        Schema::table('metodopagoventa', function (Blueprint $table) {
            $table->foreign(['IdFormaPago'], 'FK_MetodoPagoVenta_FormaPago')->references(['IdFormaPago'])->on('formapago')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdVenta'], 'FK_MetodoPagoVenta_Venta')->references(['IdVenta'])->on('venta')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('metodopagoventa', function (Blueprint $table) {
            $table->dropForeign('FK_MetodoPagoVenta_FormaPago');
            $table->dropForeign('FK_MetodoPagoVenta_Venta');
        });
    }
};

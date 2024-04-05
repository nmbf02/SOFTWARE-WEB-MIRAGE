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
        Schema::table('retroalimentacioncliente', function (Blueprint $table) {
            $table->foreign(['IdCliente'], 'FK_RetroalimentacionCliente_Cliente')->references(['IdCliente'])->on('clientes')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdMovimientoRetroalimentacion'], 'FK_RetroalimentacionCliente_MovimientoRetroalimentacion')->references(['IdMovimientoRetroalimentacion'])->on('tipomovimientoretroalimentacion')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoRetroalimentacion'], 'FK_RetroalimentacionCliente_TipoRetroalimentacion')->references(['IdTipoRetroalimentacion'])->on('tiporetroalimentacion')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('retroalimentacioncliente', function (Blueprint $table) {
            $table->dropForeign('FK_RetroalimentacionCliente_Cliente');
            $table->dropForeign('FK_RetroalimentacionCliente_MovimientoRetroalimentacion');
            $table->dropForeign('FK_RetroalimentacionCliente_TipoRetroalimentacion');
        });
    }
};

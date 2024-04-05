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
        Schema::table('ofertasubasta', function (Blueprint $table) {
            $table->foreign(['IdCliente'], 'FK_OfertaSubasta_Cliente')->references(['IdCliente'])->on('clientes')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdSubasta'], 'FK_OfertaSubasta_Subasta')->references(['IdSubasta'])->on('subasta')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ofertasubasta', function (Blueprint $table) {
            $table->dropForeign('FK_OfertaSubasta_Cliente');
            $table->dropForeign('FK_OfertaSubasta_Subasta');
        });
    }
};

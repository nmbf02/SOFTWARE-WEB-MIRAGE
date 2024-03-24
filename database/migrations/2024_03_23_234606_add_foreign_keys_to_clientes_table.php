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
        Schema::table('clientes', function (Blueprint $table) {
            $table->foreign(['IdCategoriaLicencia'], 'FK_Clientes_CategoriaLicencia')->references(['IdCategoriaLicencia'])->on('categorialicencia')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdCondicionFactura'], 'FK_Clientes_CondicionFactura')->references(['IdCondicionFactura'])->on('condicionfactura')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdPersona'], 'FK_Clientes_Persona')->references(['IdPersona'])->on('persona')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoPersona'], 'FK_Clientes_TipoPersona')->references(['IdTipoPersona'])->on('tipopersona')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropForeign('FK_Clientes_CategoriaLicencia');
            $table->dropForeign('FK_Clientes_CondicionFactura');
            $table->dropForeign('FK_Clientes_Persona');
            $table->dropForeign('FK_Clientes_TipoPersona');
        });
    }
};

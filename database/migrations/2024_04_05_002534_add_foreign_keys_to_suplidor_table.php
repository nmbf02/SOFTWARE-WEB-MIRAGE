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
        Schema::table('suplidor', function (Blueprint $table) {
            $table->foreign(['IdEmpresaSuplidor'], 'FK_Proveedor_EmpresaSuplidor')->references(['IdEmpresaSuplidor'])->on('empresasuplidor')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdPersona'], 'FK_Proveedor_Persona')->references(['IdPersona'])->on('persona')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoPersona'], 'FK_Proveedor_TipoPersona')->references(['IdTipoPersona'])->on('tipopersona')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('suplidor', function (Blueprint $table) {
            $table->dropForeign('FK_Proveedor_EmpresaSuplidor');
            $table->dropForeign('FK_Proveedor_Persona');
            $table->dropForeign('FK_Proveedor_TipoPersona');
        });
    }
};

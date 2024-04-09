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
        Schema::table('seguro', function (Blueprint $table) {
            $table->foreign(['IdCoberturaSeguro'], 'FK_Seguro_CoberturaSeguro')->references(['IdCoberturaSeguro'])->on('coberturaseguro')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdCompaniaSeguro'], 'FK_Seguro_CompaniaSeguro')->references(['IdCompaniaSeguro'])->on('companiaseguro')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdCondicionSeguro'], 'FK_Seguro_CondicionSeguro')->references(['IdCondicionSeguro'])->on('condicionseguro')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdEstadoPoliza'], 'FK_Seguro_EstadoPolizaSeguro')->references(['IdEstadoPoliza'])->on('estadopoliza')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdTipoSeguro'], 'FK_Seguro_TipoSeguro')->references(['IdTipoSeguro'])->on('tiposeguro')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seguro', function (Blueprint $table) {
            $table->dropForeign('FK_Seguro_CoberturaSeguro');
            $table->dropForeign('FK_Seguro_CompaniaSeguro');
            $table->dropForeign('FK_Seguro_CondicionSeguro');
            $table->dropForeign('FK_Seguro_EstadoPolizaSeguro');
            $table->dropForeign('FK_Seguro_TipoSeguro');
        });
    }
};

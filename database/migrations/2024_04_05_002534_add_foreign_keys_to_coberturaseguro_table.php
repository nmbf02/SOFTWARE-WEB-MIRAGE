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
        Schema::table('coberturaseguro', function (Blueprint $table) {
            $table->foreign(['IdTipoRiesgo'], 'FK_CoberturaSeguro_TipoRiesgoCobertura')->references(['IdTipoRiesgo'])->on('tiporiesgo')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coberturaseguro', function (Blueprint $table) {
            $table->dropForeign('FK_CoberturaSeguro_TipoRiesgoCobertura');
        });
    }
};

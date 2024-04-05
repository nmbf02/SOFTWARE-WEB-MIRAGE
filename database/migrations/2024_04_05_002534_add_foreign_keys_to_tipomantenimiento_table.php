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
        Schema::table('tipomantenimiento', function (Blueprint $table) {
            $table->foreign(['IdFrecuenciaMantenimiento'], 'FK_TipoMantenimiento_FrecuenciaMantenimiento')->references(['IdFrecuenciaMantenimiento'])->on('frecuenciamantenimiento')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipomantenimiento', function (Blueprint $table) {
            $table->dropForeign('FK_TipoMantenimiento_FrecuenciaMantenimiento');
        });
    }
};

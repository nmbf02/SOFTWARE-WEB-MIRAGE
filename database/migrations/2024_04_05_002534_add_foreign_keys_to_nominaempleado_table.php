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
        Schema::table('nominaempleado', function (Blueprint $table) {
            $table->foreign(['IdTipoNomina'], 'FK_NominaEmpleado_TipoNominaEmpleado')->references(['IdTipoNomina'])->on('tiponominaempleado')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nominaempleado', function (Blueprint $table) {
            $table->dropForeign('FK_NominaEmpleado_TipoNominaEmpleado');
        });
    }
};

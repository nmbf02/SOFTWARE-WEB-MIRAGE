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
        Schema::table('persona', function (Blueprint $table) {
            $table->foreign(['IdCuenta'], 'FK_Persona_CuentaBanco')->references(['IdCuenta'])->on('cuentabanco')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdSector'], 'FK_Persona_Sector')->references(['IdSector'])->on('sector')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdSeguro'], 'FK_Persona_Seguro')->references(['IdSeguro'])->on('seguro')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('persona', function (Blueprint $table) {
            $table->dropForeign('FK_Persona_CuentaBanco');
            $table->dropForeign('FK_Persona_Sector');
            $table->dropForeign('FK_Persona_Seguro');
        });
    }
};

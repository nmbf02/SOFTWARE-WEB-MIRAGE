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
        Schema::table('cuentabanco', function (Blueprint $table) {
            $table->foreign(['IdBanco'], 'FK_CuentaBanco_Banco')->references(['IdBanco'])->on('banco')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdMoneda'], 'FK_CuentaBanco_Moneda')->references(['IdMoneda'])->on('moneda')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cuentabanco', function (Blueprint $table) {
            $table->dropForeign('FK_CuentaBanco_Banco');
            $table->dropForeign('FK_CuentaBanco_Moneda');
        });
    }
};

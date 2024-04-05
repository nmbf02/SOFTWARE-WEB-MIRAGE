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
        Schema::table('empresasuplidor', function (Blueprint $table) {
            $table->foreign(['IdEmpresa'], 'FK_EmpresaSuplidor_Empresa')->references(['IdEmpresa'])->on('empresa')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empresasuplidor', function (Blueprint $table) {
            $table->dropForeign('FK_EmpresaSuplidor_Empresa');
        });
    }
};

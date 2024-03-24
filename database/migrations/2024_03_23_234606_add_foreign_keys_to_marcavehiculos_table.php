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
        Schema::table('marcavehiculos', function (Blueprint $table) {
            $table->foreign(['IdGrupoVehiculo'], 'FK_MarcaVehiculos_GrupoVehiculos')->references(['IdGrupoVehiculo'])->on('grupovehiculos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marcavehiculos', function (Blueprint $table) {
            $table->dropForeign('FK_MarcaVehiculos_GrupoVehiculos');
        });
    }
};

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
        Schema::table('modelovehiculos', function (Blueprint $table) {
            $table->foreign(['IdMarcaVehiculo'], 'FK_ModeloVehiculos_MarcaVehiculos')->references(['IdMarcaVehiculo'])->on('marcavehiculos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modelovehiculos', function (Blueprint $table) {
            $table->dropForeign('FK_ModeloVehiculos_MarcaVehiculos');
        });
    }
};

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
        Schema::table('duenovehiculos', function (Blueprint $table) {
            $table->foreign(['IdCliente'], 'FK_DuenoVehiculos_Cliente')->references(['IdCliente'])->on('clientes')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdVehiculo'], 'FK_DuenoVehiculos_Vehiculos')->references(['IdVehiculo'])->on('vehiculos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('duenovehiculos', function (Blueprint $table) {
            $table->dropForeign('FK_DuenoVehiculos_Cliente');
            $table->dropForeign('FK_DuenoVehiculos_Vehiculos');
        });
    }
};

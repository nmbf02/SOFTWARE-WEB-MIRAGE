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
        Schema::table('inventario', function (Blueprint $table) {
            $table->foreign(['IdTipoMovimiento'], 'FK_Inventario_TipoMovimiento')->references(['IdTipoMovimiento'])->on('tipomovimientoinventario')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdUbicacion'], 'FK_Inventario_Ubicacion')->references(['IdUbicacion'])->on('ubicacion')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdUsuario'], 'FK_Inventario_Usuario')->references(['IdUsuario'])->on('usuario')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inventario', function (Blueprint $table) {
            $table->dropForeign('FK_Inventario_TipoMovimiento');
            $table->dropForeign('FK_Inventario_Ubicacion');
            $table->dropForeign('FK_Inventario_Usuario');
        });
    }
};

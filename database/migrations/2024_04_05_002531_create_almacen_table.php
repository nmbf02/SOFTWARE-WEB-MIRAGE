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
        Schema::create('almacen', function (Blueprint $table) {
            $table->integer('IdAlmacen', true)->comment('Es el identificador único para cada almacén. ');
            $table->integer('IdSucursal')->nullable()->index('fk_almacen_sucursal')->comment('Es una clave foránea que se refiere a la tabla de sucursales. Este campo asocia cada almacén con su sucursal correspondiente.');
            $table->text('Descripcion')->comment('Ofrece detalles específicos sobre el almacén.');
            $table->boolean('Status')->default(false)->comment('Representa el estado actual del almacén, donde típicamente 1 indica que está activo y 0 que está inactivo o cerrado.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('almacen');
    }
};

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
        Schema::create('sector', function (Blueprint $table) {
            $table->integer('IdSector', true)->comment('Identificador único para cada sector registrado en el sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del sector. ');
            $table->integer('IdProvincia')->index('fk_sector_provincia')->comment('Clave foránea opcional que vincula el sector a una provincia o estado específico, si aplica. Esto permite una clasificación geográfica más detallada.');
            $table->boolean('Status')->default(false)->comment('Indica si el sector está activo (1) o inactivo (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sector');
    }
};

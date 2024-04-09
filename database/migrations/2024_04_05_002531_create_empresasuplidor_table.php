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
        Schema::create('empresasuplidor', function (Blueprint $table) {
            $table->integer('IdEmpresaSuplidor', true)->comment('Identificador único para cada suplidor que es una empresa, facilitando el seguimiento y la gestión de las relaciones comerciales.');
            $table->integer('IdEmpresa')->nullable()->index('fk_empresasuplidor_empresa')->comment('Clave foránea que referencia a la tabla Empresa. Identifica la empresa que actúa como suplidor.');
            $table->boolean('Status')->default(false)->comment('Indica si la relación con el suplidor está activa (1) o inactiva (0). Esto es útil para gestionar suplidores que ya no se utilizan o están temporalmente inactivos.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresasuplidor');
    }
};

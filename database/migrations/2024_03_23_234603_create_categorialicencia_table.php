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
        Schema::create('categorialicencia', function (Blueprint $table) {
            $table->integer('IdCategoriaLicencia', true)->comment('Identificador único para cada categoría de licencia de conducir.');
            $table->text('Descripcion')->comment('Describe el tipo de licencia de conducir, por ejemplo, "Licencia tipo A", "Licencia para vehículos pesados", etc.');
            $table->text('Abreviatura')->nullable()->comment('Una abreviatura o código corto para referirse a la categoría de la licencia, facilitando su identificación en registros breves o documentos.');
            $table->boolean('Status')->default(false)->comment('Indica si la categoría de licencia está activa (1) o inactiva (0) dentro del sistema.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorialicencia');
    }
};

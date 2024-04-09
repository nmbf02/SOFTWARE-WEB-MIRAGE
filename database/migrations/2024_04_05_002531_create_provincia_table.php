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
        Schema::create('provincia', function (Blueprint $table) {
            $table->integer('IdProvincia', true)->comment('Identificador único para cada provincia registrada en el sistema.');
            $table->text('Descripcion')->comment('Nombre o descripción de la provincia. Este campo almacena el nombre oficial o comúnmente usado de la provincia.');
            $table->integer('IdPais')->index('fk_provincia_pais')->comment('Clave foránea que referencia al país al que pertenece la provincia. Este campo vincula la provincia con una entrada específica en una tabla de países, asegurando que cada provincia esté correctamente asociada con su país correspondiente.');
            $table->boolean('Status')->default(false)->comment('Indica si la provincia está activa (1) o inactiva (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provincia');
    }
};

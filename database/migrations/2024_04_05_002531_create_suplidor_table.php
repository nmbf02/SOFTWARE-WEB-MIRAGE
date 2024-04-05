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
        Schema::create('suplidor', function (Blueprint $table) {
            $table->integer('IdSuplidor', true)->comment('Identificador único para cada suplidor registrado en el sistema.');
            $table->integer('IdPersona')->index('fk_proveedor_persona')->comment('Clave foránea que referencia a la tabla Persona, si el suplidor es una persona individual. Este campo vincula el suplidor con sus datos personales.');
            $table->integer('IdTipoPersona')->index('fk_proveedor_tipopersona')->comment('Clave foránea que indica si el suplidor es una persona física o jurídica (empresa), basado en una clasificación previa en otra tabla como TipoPersona.');
            $table->integer('IdEmpresaSuplidor')->index('fk_proveedor_empresasuplidor')->comment('Clave foránea que referencia a la tabla EmpresaSuplidor, en caso de que el suplidor sea una empresa. Permite conectar el suplidor con información corporativa específica.');
            $table->boolean('Status')->default(false)->comment('ndica si el suplidor está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suplidor');
    }
};

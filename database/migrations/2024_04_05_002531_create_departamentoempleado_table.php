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
        Schema::create('departamentoempleado', function (Blueprint $table) {
            $table->integer('IdDepartamentoEmpleado', true)->comment('Identificador único para cada departamento dentro de la empresa.');
            $table->integer('IdSucursal')->index('fk_departamentoempleado_sucursal')->comment('Clave foránea que referencia a la tabla Sucursal, identificando la sucursal a la cual pertenece el departamento. Esto es útil en empresas con múltiples ubicaciones o sucursales.');
            $table->text('Descripcion')->comment('Nombre o descripción del departamento, como "Recursos Humanos", "Finanzas", "Ventas", etc.');
            $table->boolean('Status')->default(false)->comment('Indica si el departamento está activo (1) o inactivo (0) dentro de la organización.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departamentoempleado');
    }
};

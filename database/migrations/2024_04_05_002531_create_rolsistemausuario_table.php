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
        Schema::create('rolsistemausuario', function (Blueprint $table) {
            $table->integer('IdRolSistemaUsuario', true)->comment('Identificador único para cada rol dentro del sistema.');
            $table->text('Descripcion')->comment('Descripción o nombre del rol, como "Administrador", "Usuario Final", "Operador", "Gerente", etc., que indica el conjunto de permisos y responsabilidades asociadas.');
            $table->boolean('Status')->default(false)->comment('Indica si el rol está activo (1) o inactivo (0). ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rolsistemausuario');
    }
};

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
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('IdUsuario', true)->comment('Identificador único para cada usuario registrado en el sistema.');
            $table->text('NombreUsuario')->comment('Nombre de usuario o identificador que utiliza el usuario para iniciar sesión en el sistema. Debe ser único en el sistema para evitar conflictos de identificación.');
            $table->text('Credencial')->comment('Contraseña o hash de la contraseña utilizada por el usuario para acceder al sistema.');
            $table->integer('IdRolSistemaUsuario')->index('fk_usuario_rolsistemausuario')->comment('Clave foránea que referencia al rol del usuario dentro del sistema. Este campo vincula al usuario con un conjunto específico de permisos y responsabilidades.');
            $table->integer('IdEmpleado')->index('fk_usuario_empleado')->comment('Clave foránea que asocia el usuario a un registro específico de empleado en la base de datos, si el sistema se utiliza en un contexto empresarial. ');
            $table->boolean('Status')->default(false)->comment('Indica si la cuenta de usuario está activa (1) o inactiva (0).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
};

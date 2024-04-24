<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';  // Especifica el nombre de la tabla en la base de datos
    protected $primaryKey = 'IdUsuario';  // Define la clave primaria si no es 'id'
    public $timestamps = false;  // Desactiva el manejo automático de timestamps si no tienes 'created_at' y 'updated_at'

    protected $fillable = [
        'NombreUsuario',
        'Credencial',
        'IdRolSistemaUsuario',
        'IdEmpleado',
        'Status'
    ];

    // Relaciones con otras tablas
    public function rolSistemaUsuario()
    {
        return $this->belongsTo('App\Models\RolSistemaUsuario', 'IdRolSistemaUsuario');
    }

    public function empleado()
    {
        return $this->belongsTo('App\Models\Empleado', 'IdEmpleado');
    }
}

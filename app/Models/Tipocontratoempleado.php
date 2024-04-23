<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipoContratoEmpleado extends Model
{
    use HasFactory;

    protected $table = 'tipocontratoempleado';  // Asegúrate de que coincida con el nombre de tu tabla
    protected $primaryKey = 'IdTipoContratoEmpleado';  // Clave primaria
    public $timestamps = false;  // Si la tabla no tiene campos timestamps (created_at, updated_at)

    protected $fillable = [
        'Descripcion', 
        'Status'
    ];

    // Aquí podrías definir relaciones con otros modelos si es necesario
    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado', 'IdTipoContratoEmpleado');
    }
}

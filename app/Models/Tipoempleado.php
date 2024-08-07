<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipoEmpleado extends Model
{
    use HasFactory;

    protected $table = 'tipoempleado';  // Asegúrate de que coincida con el nombre de tu tabla
    protected $primaryKey = 'IdTipoEmpleado';  // Clave primaria
    public $timestamps = false;  // Si la tabla no tiene campos timestamps (created_at, updated_at)

    protected $fillable = [
        'Descripcion', 
        'Status'
    ];

    protected $casts = [
        'Status' => 'boolean',
    ];

    // Aquí podrías definir relaciones con otros modelos si es necesario
    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado', 'IdTipoEmpleado');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DepartamentoEmpleado extends Model
{
    use HasFactory;

    protected $table = 'departamentoempleado';  // Asegúrate de que coincida con el nombre de tu tabla
    protected $primaryKey = 'IdDepartamentoEmpleado';  // Clave primaria
    public $timestamps = false;  // Si la tabla no tiene campos timestamps (created_at, updated_at)

    protected $fillable = [
        'IdSucursal',
        'Descripcion',
        'Status'
    ];

    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado', 'IdDepartamentoEmpleado');
    }
}

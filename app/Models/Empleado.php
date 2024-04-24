<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';  // Asegúrate de que coincida con el nombre de tu tabla
    protected $primaryKey = 'IdEmpleado';  // Clave primaria
    public $timestamps = false;  // Si la tabla no tiene campos timestamps (created_at, updated_at)

    protected $fillable = [
        'IdPersona',
        'IdDepartamentoEmpleado',
        'IdTipoEmpleado',
        'IdCargoEmpleado',
        'IdTipoContratoEmpleado',
        'MontoPagoPorHora',
        'SalarioBase',
        'HorasTrabajoSemanales',
        'FechaIngreso',
        'IdNominaEmpleado',
        'Status'
    ];

    // Relaciones con otras tablas
    public function persona()
    {
        return $this->belongsTo('App\Models\Persona', 'IdPersona');
    }

    public function departamento()
    {
        return $this->belongsTo('App\Models\Departamentoempleado', 'IdDepartamentoEmpleado');
    }

    public function tipoEmpleado()
    {
        return $this->belongsTo('App\Models\Tipoempleado', 'IdTipoEmpleado');
    }

    public function cargo()
    {
        return $this->belongsTo('App\Models\Cargoempleado', 'IdCargoEmpleado');
    }

    public function tipoContrato()
    {
        return $this->belongsTo('App\Models\Tipocontratoempleado', 'IdTipoContratoEmpleado');
    }

    public function nomina()
    {
        return $this->belongsTo('App\Models\Nominaempleado', 'IdNominaEmpleado');
    }
}

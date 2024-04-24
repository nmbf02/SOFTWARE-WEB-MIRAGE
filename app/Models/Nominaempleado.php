<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NominaEmpleado extends Model
{
    use HasFactory;

    protected $table = 'nominaempleado';  // Asegúrate de que coincida con el nombre de tu tabla
    protected $primaryKey = 'IdNominaEmpleado';  // Clave primaria
    public $timestamps = false;  // Si la tabla no tiene campos timestamps (created_at, updated_at)

    protected $fillable = [
        'Descripcion',
        'IdTipoNomina',
        'Status'
    ];

    // Relaciones con otras tablas
    public function tipoNomina()
    {
        return $this->belongsTo('App\Models\Tiponominaempleado', 'IdTipoNomina');
    }

    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado', 'IdNominaEmpleado');
    }
}

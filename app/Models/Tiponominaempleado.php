<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tiponominaempleado extends Model
{
    use HasFactory;

    protected $table = 'tiponominaempleado';  // Asegúrate de que coincida con el nombre de tu tabla
    protected $primaryKey = 'IdTipoNomina';  // Clave primaria
    public $timestamps = false;  // Si la tabla no tiene campos timestamps (created_at, updated_at)

    protected $fillable = [
        'Descripcion',
        'Dias',
        'Status'
    ];

    // Relaciones con otras tablas
    public function nominasEmpleados()
    {
        return $this->hasMany('App\Models\NominaEmpleado', 'IdTipoNomina');
    }
}

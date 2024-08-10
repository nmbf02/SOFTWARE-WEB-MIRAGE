<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMantenimiento extends Model
{
    use HasFactory;

    // Define el nombre de la tabla si es diferente al nombre por defecto 'tipo_mantenimientos'
    protected $table = 'TipoMantenimiento';

    // Especifica la clave primaria si no es 'id'
    protected $primaryKey = 'IdTipoMantenimiento';

    // Si no estás utilizando timestamps (created_at, updated_at), puedes deshabilitarlo
    public $timestamps = false;

    // Los atributos que se pueden asignar masivamente
    protected $fillable = [
        'Descripcion',
        'Status',
    ];

    // Relación hasMany, un TipoMantenimiento tiene muchos Servicios
    public function servicios()
    {
        return $this->hasMany('App\Models\Servicio', 'IdTipoMantenimiento', 'IdTipoMantenimiento');
    }
}

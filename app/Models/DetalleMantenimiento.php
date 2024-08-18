<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleMantenimiento extends Model
{
    // Nombre de la tabla
    protected $table = 'DetalleMantenimiento';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'IdMantenimiento',
        'IdServicio',
        'Precio'
    ];

    // Relación con la tabla Mantenimiento
    public function mantenimiento()
    {
        return $this->belongsTo(Mantenimiento::class, 'IdMantenimiento');
    }

    // Relación con la tabla Servicio
    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'IdServicio');
    }
}

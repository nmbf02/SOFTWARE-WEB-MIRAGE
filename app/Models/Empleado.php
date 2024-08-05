<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';  // Asegúrate de que coincida con el nombre de tu tabla
    protected $primaryKey = 'IdEmpleado';  // Clave primaria
    public $timestamps = true;  // Si la tabla no tiene campos timestamps (created_at, updated_at)
   
    protected $fillable = [
        'IdPersona',
        'IdTipoEmpleado',
        'Status',
    ];

    public function persona()
    {
        return $this->belongsTo('App\Models\Persona', 'IdPersona');
    }

    public function tipoPersona()
    {
        return $this->belongsTo('App\Models\TipoPersona', 'IdTipoPersona');
    }

    public function tipoEmpleado()
    {
        return $this->belongsTo('App\Models\Tipoempleado', 'IdTipoEmpleado');
    }

    protected $casts = [
        'Status' => 'boolean',
    ];
}
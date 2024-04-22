<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresa';  // Especificando el nombre de la tabla
    protected $primaryKey = 'IdEmpresa';  // Definiendo la llave primaria

    protected $fillable = [
        'Nombre',
        'AbreviaturaNombre',
        'RUC',
        'IdSector',
        'Calle',
        'NumeroEdificio',
        'Telefono',
        'Email',
        'Status'
    ];

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'IdSector');  // Relación con el modelo Sector
    }

    public function sucursales()
    {
        return $this->hasMany(Sucursal::class, 'IdEmpresa');  // Relación con el modelo Sucursal
    }
}

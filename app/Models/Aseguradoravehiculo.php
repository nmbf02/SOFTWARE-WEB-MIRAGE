<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AseguradoraVehiculo extends Model
{
    use HasFactory;

    protected $table = 'aseguradoravehiculos';  // Especificando el nombre de la tabla
    public $timestamps = false;  // Deshabilitar timestamps
    protected $primaryKey = 'IdAseguradoraVehiculo';  // Definiendo la llave primaria


    protected $fillable = [
        'Nombre',
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
}

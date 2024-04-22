<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garantia extends Model
{
    use HasFactory;

    protected $table = 'garantia';  // Especificando el nombre de la tabla
    protected $primaryKey = 'IdGarantia';  // Definiendo la llave primaria

    protected $fillable = [
        'Nombre',
        'Descripcion',
        'FechaInicio',
        'FechaFin',
        'Cobertura',
        'Deducible',
        'PrimaBase',
        'Duracion',
        'IdLapsoTiempo',
        'Status'
    ];

    protected $casts = [
        'Status' => 'boolean', // Convertir Status a tipo booleano
    ];
    
    public function lapsoTiempo()
    {
        return $this->belongsTo(LapsoTiempo::class, 'IdLapsoTiempo');  // Relación con el modelo LapsoTiempo
    }

    // Si las garantías están relacionadas con vehículos u otros productos:
    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'IdGarantia');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Segurovehiculo extends Model
{
    use HasFactory;

    protected $table = 'segurovehiculos';  // Especificando el nombre de la tabla
    protected $primaryKey = 'IdSeguroVehiculo';  // Definiendo la llave primaria

    protected $fillable = [
        'IdAseguradoraVehiculo',
        'NumeroSeguro',
        'FechaContrato',
        'FechaVencimiento',
        'LimiteRenovacion',
        'MontoCosto',
        'IdMoneda',
        'Status'
    ];

    public function aseguradoraVehiculo()
    {
        return $this->belongsTo(AseguradoraVehiculo::class, 'IdAseguradoraVehiculo');  // Relación con AseguradoraVehiculo
    }

    public function moneda()
    {
        return $this->belongsTo(Moneda::class, 'IdMoneda');  // Relación con Moneda
    }
}

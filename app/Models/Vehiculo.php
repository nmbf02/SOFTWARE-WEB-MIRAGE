<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculos';
    protected $primaryKey = 'IdVehiculo';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'IdModeloVehiculo', 'IdColorVehiculo', 'IdEstadoVehiculo', 'AnoVehiculo', 'VIN', 'Precio',
        'IdUbicacion', 'IdSeguroVehiculo', 'IdTransmisionVehiculo', 'IdTraccionVehiculo', 'MotorCilindro',
        'Serie', 'IdTipoVehiculoConcesionario', 'IdTipoVehiculo', 'Placa', 'PlacaExhibicion', 'Chasis',
        'Matricula', 'Marbete', 'CapacidadPasajeros', 'FechaExpedicion', 'IdSegmentoMercado',
        'IdClasificacionVehiculo', 'IdTipoItbis', 'IdGarantia', 'Status'
    ];

    protected $casts = [
        'Status' => 'boolean',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculos';  // Especificando el nombre de la tabla

    protected $primaryKey = 'IdVehiculo';  // Definiendo la llave primaria

    protected $fillable = [
        'IdModeloVehiculo', 
        'Descripcion',
        'IdColorVehiculo', 
        'IdEstadoVehiculo', 
        'AnoVehiculo',
        'VIN', 
        'Precio', 
        'IdUbicacion', 
        'IdSeguroVehiculo', 
        'IdTransmisionVehiculo',
        'IdTraccionVehiculo', 
        'MotorCilindro', 
        'Serie', 
        'IdTipoVehiculoConcesionario',
        'IdTipoVehiculo', 
        'Placa', 
        'PlacaExhibicion', 
        'Chasis', 
        'Matricula', 
        'Marbete',
        'CapacidadPasajeros', 
        'FechaExpedicion', 
        'IdSegmentoMercado', 
        'IdClasificacionVehiculo',
        'IdTipoItbis', 
        'IdGarantia', 
        'Status'
    ];

    protected $casts = [
        'Status' => 'boolean',
    ];
    
    // Relaciones
    public function modeloVehiculo()
    {
        return $this->belongsTo(ModeloVehiculo::class, 'IdModeloVehiculo');
    }

    public function colorVehiculo()
    {
        return $this->belongsTo(ColorVehiculo::class, 'IdColorVehiculo');
    }

    public function estadoVehiculo()
    {
        return $this->belongsTo(EstadoVehiculo::class, 'IdEstadoVehiculo');
    }

    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class, 'IdUbicacion');
    }

    public function seguroVehiculo()
    {
        return $this->belongsTo(SeguroVehiculo::class, 'IdSeguroVehiculo');
    }

    public function transmisionVehiculo()
    {
        return $this->belongsTo(TransmisionVehiculo::class, 'IdTransmisionVehiculo');
    }

    public function traccionVehiculo()
    {
        return $this->belongsTo(TraccionVehiculo::class, 'IdTraccionVehiculo');
    }

    public function tipoVehiculoConcesionario()
    {
        return $this->belongsTo(TipoVehiculoConcesionario::class, 'IdTipoVehiculoConcesionario');
    }

    public function tipoVehiculo()
    {
        return $this->belongsTo(TipoVehiculo::class, 'IdTipoVehiculo');
    }

    public function segmentoMercado()
    {
        return $this->belongsTo(SegmentoMercado::class, 'IdSegmentoMercado');
    }

    public function clasificacionVehiculo()
    {
        return $this->belongsTo(ClasificacionVehiculo::class, 'IdClasificacionVehiculo');
    }

    public function tipoItbis()
    {
        return $this->belongsTo(TipoItbis::class, 'IdTipoItbis');
    }

    public function garantia()
    {
        return $this->belongsTo(Garantia::class, 'IdGarantia');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'venta';
    protected $primaryKey = 'IdVenta';
    public $timestamps = false;

    protected $fillable = [
        'IdCliente',
        'Fecha',
        'Subtotal',
        'Itbis',
        'Descuento',
        'Total',
        'IdMoneda',
        'IdUsuario',
        'IdCotizacion',
        'IdSolicitudPrestamoVehiculo',
        'Status'
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente', 'IdCliente');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario', 'IdUsuario');
    }

    public function moneda()
    {
        return $this->belongsTo('App\Models\Moneda', 'IdMoneda');
    }

    public function cotizacion()
    {
        return $this->belongsTo('App\Models\Cotizacion', 'IdCotizacion');
    }

    public function solicitudPrestamoVehiculo()
    {
        return $this->belongsTo('App\Models\SolicitudPrestamoVehiculo', 'IdSolicitudPrestamoVehiculo');
    }

    public function detalleVentas() // Método de relación
    {
        return $this->hasMany(DetalleVenta::class, 'IdVenta');
    }
}

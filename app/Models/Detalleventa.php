<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;

    protected $table = 'detalleventa';  // Nombre de la tabla en la base de datos

    protected $primaryKey = 'IdVenta';  // Clave primaria, ajustar si es diferente

    protected $fillable = [
        'IdVenta',
        'IdVehiculo',
        'CantidadVendida',
        'ItbisVehiculo',
        'PrecioUnitario',
        'Subtotal',
        'Descuento'
    ];

    public $timestamps = false;  // Desactivar si la tabla no tiene timestamps (created_at, updated_at)

    // Definir relaciones si son necesarias, por ejemplo:
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class, 'IdVehiculo');
    }

}

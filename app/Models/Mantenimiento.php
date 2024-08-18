<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    // Nombre de la tabla
    protected $table = 'Mantenimiento';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'IdVenta',
        'IdMantenimientoAnterior',
        'IdCliente',
        'IdVehiculo',
        'KilometrajeActual',
        'KilometrajeProximo',
        'FechaProximoMantenimiento',
        'FechaMantenimientoActual',
        'IdEmpleado',
        'Monto'
    ];

    // Relación con la tabla Venta
    public function venta()
    {
        return $this->belongsTo(Venta::class, 'IdVenta');
    }

    // Relación con la tabla Mantenimiento (mantenimiento anterior)
    public function mantenimientoAnterior()
    {
        return $this->belongsTo(Mantenimiento::class, 'IdMantenimientoAnterior');
    }

    // Relación con la tabla Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'IdCliente');
    }

    // Relación con la tabla Vehiculo
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class, 'IdVehiculo');
    }

    // Relación con la tabla Empleado
    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'IdEmpleado');
    }

    // Relación con la tabla DetalleMantenimiento
    public function detalles()
    {
        return $this->hasMany(DetalleMantenimiento::class, 'IdMantenimiento');
    }
}


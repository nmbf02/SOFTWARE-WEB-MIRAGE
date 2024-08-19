<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'Servicio';
    protected $primaryKey = 'IdServicio';
    public $timestamps = true;

    protected $fillable = [
        'IdMotor',
        'IdTipoMantenimiento',
        'KilometrajeInicial',
        'KilometrajeFinal',
        'DesdeFecha',
        'HastaFecha',
        'Status',
        'Notas',
        'Precio'
    ];

    public function tipoMotor()
    {
        return $this->belongsTo(Aceite::class,'IdMotor');
    }

    public function tipoMantenimiento()
    {
        return $this->belongsTo(Aceite::class,'IdTipoMantenimiento');
    }
    public function tipoMantenimiento_Nathaly()
    {
        return $this->belongsTo(TipoMantenimiento::class,'IdTipoMantenimiento');
    }

    public function motor()
    {
        return $this->belongsTo(Motor::class, 'IdMotor');
    }

    // Relación con DetalleMantenimiento: Un servicio puede estar en muchos detalles de mantenimiento
    public function detallesMantenimiento()
    {
        return $this->hasMany(DetalleMantenimiento::class, 'IdServicio');
    }

}


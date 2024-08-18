<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;

    // Definir el nombre de la tabla asociada
    protected $table = 'mantenimiento';

    // Definir la clave primaria
    protected $primaryKey = 'IdMantenimiento';

    // Desactivar timestamps si no se utilizan en la tabla
    public $timestamps = false;

    // Definir los atributos que se pueden asignar en masa
    protected $fillable = [
        'IdMotor',
        'Descripcion',
        'KilometrajeRecomendado',
    ];

    // Relación con la tabla Motor
    public function motor()
    {
        return $this->belongsTo(Motor::class, 'IdMotor');
    }
}

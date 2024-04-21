<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificacionvehiculo extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla si no sigue la convención de nombres de Laravel
    protected $table = 'clasificacionvehiculos';

    // Laravel asume que cada tabla tiene una columna de clave primaria llamada 'id'.
    // Si ese no es el caso, se debe especificar el nombre de la clave primaria de la tabla.
    protected $primaryKey = 'IdClasificacionVehiculo';

    // Desactiva los timestamps si no están presentes en la tabla.
    public $timestamps = false;

    // Define los atributos que son asignables masivamente.
    protected $fillable = [
        'Descripcion',
        'Status'
    ];

    // Define los atributos que deben ser casteados a tipos nativos.
    protected $casts = [
        'Status' => 'boolean',
    ];
}

<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMantenimiento extends Model
{
use HasFactory;

// Define el nombre de la tabla si es diferente al nombre por defecto 'tipo_mantenimientos'
protected $table = 'TipoMantenimiento';

// Si no estás utilizando timestamps (created_at, updated_at), puedes deshabilitarlo
public $timestamps = false;

// Los atributos que se pueden asignar masivamente
protected $fillable = [
'Descripcion',
'Status',
];

// Si los nombres de las columnas son diferentes de los definidos en el controlador, puedes especificarlo
// protected $attributes = [
//     'descripcion' => 'Descripcion',
//     'status' => 'Status',
// ];
}
